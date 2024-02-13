<?php

namespace App\Controller\Admin;

use App\Entity\Hurtowe;
use App\Entity\Wyceny;
use App\Repository\HurtoweRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

class HurtoweWozekController extends AbstractController
{
    private $entityManager;
    private $hurtoweRepository;

    public function __construct(EntityManagerInterface $entityManager, HurtoweRepository $hurtoweRepository)
    {
        $this->entityManager = $entityManager;
        $this->hurtoweRepository = $hurtoweRepository;
    }

    #[Route('/hurtowe/{id}/wozek/{wozek}', name: 'app_get_hurtowe_wozek')]
    public function getHurtoweWozek(?int $id, ?int $wozek)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Hurtowe::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $hurtoweEntity = $queryBuilder->getQuery()->getResult();

        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($nr = $hurtoweEntity[0]->{"getWozek" . $i}()){

                //gdy nie ma wybranej nazwy
                if(null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$nr][] = array('nazwa'=> $kompozycja,
                                      'rodzaj'=> $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                                      'sztuk'=> $hurtoweEntity[0]->{"getSztuk" . $i}(),
                                      'cena'=> str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()));
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => HurtoweCrudController::class,
                'entityId' => $id,
            ]
        );

        return $this->render('admin/hurtowe/wozek.html.twig', [
            'id' => $id,
            'wozekNr' => $wozek,
            'wozki' => $wozki[$wozek],
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link
        ]);
    }

    #[Route('/hurtowe-pdf/{id}/wozek/{wozek}', name: 'app_get_hurtowe_wozek_pdf')]
    public function getHurtoweWozekPdf(?int $id, ?int $wozek)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Hurtowe::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $hurtoweEntity = $queryBuilder->getQuery()->getResult();

        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($nr = $hurtoweEntity[0]->{"getWozek" . $i}()){

                //gdy nie ma wybranej nazwy
                if(null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$nr][] = array('nazwa'=> $kompozycja,
                    'rodzaj'=> $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                    'sztuk'=> $hurtoweEntity[0]->{"getSztuk" . $i}(),
                    'cena'=> str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()));
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => HurtoweCrudController::class,
                'entityId' => $id,
            ]
        );

        $html = $this->renderView('admin/hurtowe/wozek-pdf.html.twig', [
            'id' => $id,
            'wozekNr' => $wozek,
            'wozki' => $wozki[$wozek],
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link
        ]);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        // Opcjonalnie możesz ustawić nagłówek Content-Disposition, aby przeglądarka odebrała odpowiedź jako plik do pobrania
        header('Content-Disposition: attachment; filename="wozek.pdf"');

        return new Response($mpdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }

    //całe zamówienie - wszystkie wózki
    #[Route('/hurtowe/{id}', name: 'app_get_hurtowe_zamowienie')]
    public function getHurtoweZamowienie(?int $id, AdminUrlGenerator $adminUrlGenerator)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Hurtowe::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $hurtoweEntity = $queryBuilder->getQuery()->getResult();


        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($nr = $hurtoweEntity[0]->{"getWozek" . $i}()){

                $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                //gdy nie ma wybranej nazwy
                if(null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$nr][] = array('nazwa'=> $kompozycja,
                                      'rodzaj'=> $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                                      'sztuk'=> $hurtoweEntity[0]->{"getSztuk" . $i}(),
                                      'cena'=> str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()),
                                      'wartosc'=> str_replace('.', ',', $hurtoweEntity[0]->{"getWartosc" . $i}()),
                );
            }
        }
        ksort($wozki);

        //bez numerów wózków
        for ($i = 1; $i<=40; $i++) {
            if (!$hurtoweEntity[0]->{"getWozek" . $i}()) {

                if ($hurtoweEntity[0]->{"getWartosc" . $i}()) { //gdy jst wartosc jakakolwiek w wierszu
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    //gdy nie ma wybranej nazwy
                    if (null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                        $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                        $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                        $kompozycja = $kompozycja->getNazwa();
                    } else {
                        //własna nazwa
                        if (null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                            $kompozycja = '-';
                        } else {
                            $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                        }
                    }

                    $wozki['-'][] = array('nazwa' => $kompozycja,
                        'rodzaj' => $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                        'sztuk' => $hurtoweEntity[0]->{"getSztuk" . $i}(),
                        'cena' => str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()),
                        'wartosc' => str_replace('.', ',', $hurtoweEntity[0]->{"getWartosc" . $i}()),
                    );
                }
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => HurtoweCrudController::class,
                'entityId' => $id,
            ]
        );

        return $this->render('admin/hurtowe/zestawienie.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'kwota' =>  $suma = str_replace('.', ',', $hurtoweEntity[0]->getSuma()),
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link
        ]);
    }

    //całe zamówienie - wszystkie wózki - do pdf
    #[Route('/hurtowe/{id}', name: 'app_get_hurtowe_zamowienie_pdf')]
    public function getHurtoweZamowieniePdf(?int $id, AdminUrlGenerator $adminUrlGenerator)
    {

        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('h')
            ->from(Hurtowe::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $id)
            ->orderBy('h.id', 'ASC');

        $hurtoweEntity = $queryBuilder->getQuery()->getResult();


        $wozki = [];
        for ($i = 1; $i<=40; $i++){
            if($nr = $hurtoweEntity[0]->{"getWozek" . $i}()){

                $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                //gdy nie ma wybranej nazwy
                if(null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                    $kompozycja = $kompozycja->getNazwa();
                }else{
                    //własna nazwa
                    if(null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                        $kompozycja = '-';
                    }else {
                        $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                    }
                }

                $wozki[$nr][] = array('nazwa'=> $kompozycja,
                    'rodzaj'=> $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                    'sztuk'=> $hurtoweEntity[0]->{"getSztuk" . $i}(),
                    'cena'=> str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()),
                    'wartosc'=> str_replace('.', ',', $hurtoweEntity[0]->{"getWartosc" . $i}()),
                );
            }
        }
        ksort($wozki);

        //bez numerów wózków
        for ($i = 1; $i<=40; $i++) {
            if (!$hurtoweEntity[0]->{"getWozek" . $i}()) {

                if ($hurtoweEntity[0]->{"getWartosc" . $i}()) { //gdy jst wartosc jakakolwiek w wierszu
                    $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                    //gdy nie ma wybranej nazwy
                    if (null != $hurtoweEntity[0]->{"getKompozycja" . $i}()) {
                        $kompozycjaId = $hurtoweEntity[0]->{"getKompozycja" . $i}();

                        $kompozycja = $this->entityManager->getRepository(Wyceny::class)->find($kompozycjaId);
                        $kompozycja = $kompozycja->getNazwa();
                    } else {
                        //własna nazwa
                        if (null == $hurtoweEntity[0]->{"getNazwa" . $i}()) {
                            $kompozycja = '-';
                        } else {
                            $kompozycja = $hurtoweEntity[0]->{"getNazwa" . $i}();
                        }
                    }

                    $wozki['-'][] = array('nazwa' => $kompozycja,
                        'rodzaj' => $hurtoweEntity[0]->{"getRodzaj" . $i}(),
                        'sztuk' => $hurtoweEntity[0]->{"getSztuk" . $i}(),
                        'cena' => str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()),
                        'wartosc' => str_replace('.', ',', $hurtoweEntity[0]->{"getWartosc" . $i}()),
                    );
                }
            }
        }

        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => HurtoweCrudController::class,
                'entityId' => $id,
            ]
        );

        $html = $this->renderView('admin/hurtowe/zestawienie-pdf.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'kwota' =>  $suma = str_replace('.', ',', $hurtoweEntity[0]->getSuma()),
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link
        ]);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        // Opcjonalnie możesz ustawić nagłówek Content-Disposition, aby przeglądarka odebrała odpowiedź jako plik do pobrania
        header('Content-Disposition: attachment; filename="zestawienie.pdf"');

        return new Response($mpdf->Output(), 200, [
            'Content-Type' => 'application/pdf',
        ]);


    }


}