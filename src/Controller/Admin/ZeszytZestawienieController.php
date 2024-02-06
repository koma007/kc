<?php

namespace App\Controller\Admin;

use App\Entity\Zeszyt;
use App\Entity\Wyceny;
use App\Repository\ZeszytRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

class ZeszytZestawienieController extends AbstractController
{
    private $entityManager;
    private $zeszytRepository;
    private $user;

    public function __construct(EntityManagerInterface $entityManager, ZeszytRepository $zeszytRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->zeszytRepository = $zeszytRepository;
        $this->user = $security->getUser();
    }

    #[Route('/zeszyt/{id}/zestawienie/{zestawienie}', name: 'app_get_zeszyt_zestawienie')]
    public function getZeszytZestawienie(?int $id, ?string $zestawienie)
    {
        $dateTimeImmutableObject = \DateTimeImmutable::createFromFormat('Y-m-d', $zestawienie);

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Zeszyt::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $zeszytEntity = $queryBuilder->getQuery()->getResult();

        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($dzien = $zeszytEntity[0]->{"getupdatedAt" . $i}()){
                $dzien = $dzien->format('Y-m-d');

                //gdy nie ma wybranej nazwy
                if(null != $zeszytEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $zeszytEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $zeszytEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$dzien][] = array('nazwa'=> $kompozycja,
                                      'rodzaj'=> $zeszytEntity[0]->{"getRodzaj" . $i}(),
                                      'sztuk'=> $zeszytEntity[0]->{"getSztuk" . $i}(),
                                      'cena'=> str_replace('.', ',', $zeszytEntity[0]->{"getCena" . $i}()));
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => ZeszytCrudController::class,
                'entityId' => $id,
            ]
        );

        return $this->render('admin/zeszyt/dzien-zestawienie.html.twig', [
            'id' => $id,
            'wozekNr' => $zestawienie,
            'wozki' => $wozki[$zestawienie],
            'wstecz' => $link,
            'czy_wknd' => $dateTimeImmutableObject,
            'user' => $this->user->getName()
        ]);
    }

    #[Route('/zeszyt-pdf/{id}/zestawienie/{zestawienie}', name: 'app_get_zeszyt_zestawienie_pdf')]
    public function getZeszytZestawieniePdf(?int $id, ?string $zestawienie)
    {
        $dateTimeImmutableObject = \DateTimeImmutable::createFromFormat('Y-m-d', $zestawienie);

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Zeszyt::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $zeszytEntity = $queryBuilder->getQuery()->getResult();

        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($dzien = $zeszytEntity[0]->{"getupdatedAt" . $i}()){
                $dzien = $dzien->format('Y-m-d');

                //gdy nie ma wybranej nazwy
                if(null != $zeszytEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $zeszytEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $zeszytEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$dzien][] = array('nazwa'=> $kompozycja,
                    'rodzaj'=> $zeszytEntity[0]->{"getRodzaj" . $i}(),
                    'sztuk'=> $zeszytEntity[0]->{"getSztuk" . $i}(),
                    'cena'=> str_replace('.', ',', $zeszytEntity[0]->{"getCena" . $i}()));
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => ZeszytCrudController::class,
                'entityId' => $id,
            ]
        );

        $html = $this->renderView('admin/zeszyt/dzien-zestawienie-pdf.html.twig', [
            'id' => $id,
            'wozekNr' => $zestawienie,
            'wozki' => $wozki[$zestawienie],
            'wstecz' => $link,
            'czy_wknd' => $dateTimeImmutableObject,
            'user' => $this->user->getName()
        ]);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        // Opcjonalnie możesz ustawić nagłówek Content-Disposition, aby przeglądarka odebrała odpowiedź jako plik do pobrania
        header('Content-Disposition: attachment; filename="dzien-zestawienie.pdf"');

        return new Response($mpdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }

    //całe zamówienie - wszystkie wózki
    #[Route('/zeszyt/{id}', name: 'app_get_zeszyt_zamowienie')]
    public function getZeszytZamowienie(?int $id, AdminUrlGenerator $adminUrlGenerator)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Zeszyt::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $zeszytEntity = $queryBuilder->getQuery()->getResult();


        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($dzien = $zeszytEntity[0]->{"getupdatedAt" . $i}()){
                $dzien = $dzien->format('Y-m-d');

                $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                //gdy nie ma wybranej nazwy
                if(null != $zeszytEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $zeszytEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $zeszytEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$dzien][] = array('nazwa'=> $kompozycja,
                                      'rodzaj'=> $zeszytEntity[0]->{"getRodzaj" . $i}(),
                                      'sztuk'=> $zeszytEntity[0]->{"getSztuk" . $i}(),
                                      'cena'=> str_replace('.', ',', $zeszytEntity[0]->{"getCena" . $i}()),
                                      'wartosc'=> str_replace('.', ',', $zeszytEntity[0]->{"getWartosc" . $i}()),
                );
            }
        }
        ksort($wozki);

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => ZeszytCrudController::class,
                'entityId' => $id,
            ]
        );

        return $this->render('admin/zeszyt/zestawienie.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'wstecz' => $link,
            'user' => $this->user->getName(),
            'miesiac' => $zeszytEntity[0]->getMiesiac()
        ]);
    }

    //całe zamówienie - wszystkie wózki - do pdf
    #[Route('/zeszyt/{id}', name: 'app_get_zeszyt_zamowienie_pdf')]
    public function getZeszytZamowieniePdf(?int $id, AdminUrlGenerator $adminUrlGenerator)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Zeszyt::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $zeszytEntity = $queryBuilder->getQuery()->getResult();


        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($dzien = $zeszytEntity[0]->{"getupdatedAt" . $i}()){
                $dzien = $dzien->format('Y-m-d');

                $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                //gdy nie ma wybranej nazwy
                if(null != $zeszytEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $zeszytEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $zeszytEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $zeszytEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$dzien][] = array('nazwa'=> $kompozycja,
                    'rodzaj'=> $zeszytEntity[0]->{"getRodzaj" . $i}(),
                    'sztuk'=> $zeszytEntity[0]->{"getSztuk" . $i}(),
                    'cena'=> str_replace('.', ',', $zeszytEntity[0]->{"getCena" . $i}()),
                    'wartosc'=> str_replace('.', ',', $zeszytEntity[0]->{"getWartosc" . $i}()),
                );
            }
        }
        ksort($wozki);

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => ZeszytCrudController::class,
                'entityId' => $id,
            ]
        );

        $html = $this->renderView('admin/zeszyt/zestawienie-pdf.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'wstecz' => $link,
            'user' => $this->user->getName(),
            'miesiac' => $zeszytEntity[0]->getMiesiac()
        ]);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        // Opcjonalnie możesz ustawić nagłówek Content-Disposition, aby przeglądarka odebrała odpowiedź jako plik do pobrania
        header('Content-Disposition: attachment; filename="zeszyt_zamowienie.pdf"');

        return new Response($mpdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
        ]);


    }


}