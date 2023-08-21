<?php

namespace App\Controller;

use App\Form\CartType;
use App\Repository\ZamowienieProduktRepository;
use App\Security\EmailVerifier;
use App\Service\CartManagerService;
use App\Service\UserKoszykUpdateService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class KoszykController extends AbstractController
{

    private $zamowienieProduktRepository;
    private EmailVerifier $emailVerifier;

    public function __construct(ZamowienieProduktRepository $zamowienieProduktRepository, EntityManagerInterface $entityManager)
    {
        $this->zamowienieProduktRepository = $zamowienieProduktRepository;
        $this->entityManager = $entityManager;
    }


    #[Route('/koszyk', name: 'app_koszyk')]
    public function index(CartManagerService $cartManager, Request $request, AuthorizationCheckerInterface $authorizationChecker,  SessionInterface $session, Security $security, UserKoszykUpdateService $koszykUpdateService, MailerInterface $mailer, EmailVerifier $emailVerifier): Response
    {


        $cart = $cartManager->getCurrentCart();

        $form = $this->createForm(CartType::class, $cart);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $cart->setUpdatedAt(new \DateTimeImmutable());

                if ($form->getClickedButton() === $form->get('saveOrder')){

                    //czy user zalogowany
                    if ($authorizationChecker->isGranted('ROLE_USER')) {

                        $user = $security->getUser();
                        $koszykUpdateService->synchronizeKoszykWithUser($cart->getId(), $user->getId());



                        $this->emailVerifier = $emailVerifier;
                        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                            (new TemplatedEmail())
                                ->from(new Address('danmal@kompozycjecmentarne.pl', 'Danmal'))
                                ->to($user->getEmail())
                                ->subject('Potwierdzenie złożonego zamówienia')
                                ->htmlTemplate('koszyk/koszyk-mail2.html.twig')
                                ->context([
                                    'cart' => $cart,
                                    'form' => $form->createView()
                                ])
                        );


                    } else {
                        $session->getFlashBag()->add('info', 'Przed złożeniem zamówienia prosimy o zalogowanie się, a w przypadku braku konta o szybką rejestrację.');
                        return $this->redirectToRoute('app_login');
                    }

                    $cart->setStatus('order');
                    $cartManager->save($cart);

                }

            $cartManager->save($cart);

            return $this->redirectToRoute('app_koszyk_final');
        }

        return $this->render('koszyk/index.html.twig', [
            'cart' => $cart,
            'form' => $form->createView()
        ]);
    }

    #[Route('/koszyk-update/{id}/{productid}/{qty}/{rodzaj}', name: 'app_koszyk_update')]
    public function getCena(?int $id, ?int $productid, ?int $qty, ?string $rodzaj): JsonResponse
    {

        // Fetch the cena value based on the selected option
        $zam = $this->zamowienieProduktRepository->findOneBy([
            'zamowienieRef' => $id,
            'produkt' => $productid,
            'rodzaj' => $rodzaj,
        ]);

        if (!$zam) {
            return new JsonResponse(['success' => false, 'message' => 'Błąd przy aktualizacji koszyka'], 404);
        }

        $zam->setQuantity($qty);
        $this->entityManager->flush();

        // Return the cena value as a JSON response
        return new JsonResponse(['success' => true]);
    }


    #[Route('/koszyk-finalizacja', name: 'app_koszyk_final')]
    public function finalizacjaKoszyka(): Response
    {


        return $this->render('koszyk/finalizacja.html.twig', [

        ]);
    }


}
