<?php

namespace App\Controller;

use App\Entity\Grupy;
use App\Entity\Wyceny;
use App\Form\AddToCartType;
use App\Message\RegisterUserNotification;
use App\Service\CartManagerService;
use App\Service\ZamowienieFactoryService;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class SklepController extends AbstractController
{

    #[Route('/sklep/{slug?}', name: 'app_sklep')]
    public function index(\Doctrine\Persistence\ManagerRegistry $doctrine, ?string $slug, ?int $id, Security $security, MessageBusInterface $bus): Response
    {
         //$bus->dispatch(new RegisterUserNotification('Look! I created a message!'));
//       dd($security->getUser()->getId());
        if(!$slug) {
            $slug = 'caloroczne';
        }


        $repository = $doctrine->getRepository(Grupy::class);
        $grupy = $repository->findBy(['aktywny' => true]);


        $rep  = $doctrine->getRepository(Grupy::class)->findOneBy(['slug' => $slug,'aktywny' => true]);
        $current_category_id = $rep->getId();

        $kompozycje_repo = $doctrine->getRepository(Wyceny::class);
        $kompozycje = $kompozycje_repo->findBy(['grupa' => $current_category_id, 'aktywny' => true]);

        return $this->render('sklep/index.html.twig', [
            'grupy' => $grupy,
            'current_category_id' => $current_category_id,
            'kompozycje' => $kompozycje
        ]);
    }

    #[Route('/sklep/produkt/{id}', name: 'app_sklep_produkt')]
    public function showProdukt(\Doctrine\Persistence\ManagerRegistry $doctrine, int $id, Request $request, Wyceny $kompozycja, CartManagerService $cartManager, SessionInterface $session, AuthorizationCheckerInterface $authorizationChecker, Security $security): Response
    {
        $repository = $doctrine->getRepository(Grupy::class);
        $grupy = $repository->findBy(['aktywny' => true]);


        $repository = $doctrine->getRepository(Wyceny::class);
        $produkt = $repository->findBy(['id' => $id, 'aktywny' => true]);

        $form = $this->createForm(AddToCartType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();

            $item->setProdukt($kompozycja);

            if ($authorizationChecker->isGranted('ROLE_USER')) {
                $user = $security->getUser();  // Pobierz obiekt użytkownika
                $item->setUserId($user);
            }




            $cart = $cartManager->getCurrentCart();


            // Zwiększenie ilości produktów w koszyku w sesji
            $totalItemsInCart = $session->get('totalItemsInCart', 0);
            $session->set('totalItemsInCart', $totalItemsInCart + $item->getQuantity());

            $cart
                ->addProdukty($item)
                ->setUpdatedAt(new \DateTimeImmutable());


            $cartManager->save($cart);

            return $this->redirectToRoute('app_koszyk');
        }



        return $this->render('sklep/produkt.html.twig', [
            'grupy' => $grupy,
            'produkt' => $produkt,
            'grupa_aktualna' => $kompozycja->getGrupa() ? $kompozycja->getGrupa()->getNazwa() : '-',
            'slug' => $kompozycja->getGrupa() ? $kompozycja->getGrupa()->getSlug() : '-',
            'form' => $form->createView()
        ]);
    }
}
