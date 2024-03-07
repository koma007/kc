<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use App\Entity\DomyslnaGrupa;
use App\Entity\Dostawcy;
use App\Entity\FvKody;
use App\Entity\Grupy;
use App\Entity\Hurtowe;
use App\Entity\Polprodukty;
use App\Entity\User;
use App\Entity\Wyceny;
use App\Entity\Zeszyt;
use App\Repository\HurtoweRepository;
use Doctrine\DBAL\Driver\AbstractDB2Driver;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Twig\Environment;

class HurtoweWozekController extends AbstractDashboardController
{
    private $entityManager;
    private $hurtoweRepository;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, HurtoweRepository $hurtoweRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->hurtoweRepository = $hurtoweRepository;
        $this->security = $security;
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

//fv -krok1
    #[Route('/fv_krok1/{id}', name: 'fv_krok_1')]
    public function getHurtoweZamowienieFvKrok1(int $id, AdminUrlGenerator $adminUrlGenerator)
    {

        $cache = new FilesystemAdapter();
        //jesli nie ma w cache - zaciagnij z callback
        $hurtoweEntity = $cache->get($id, function(ItemInterface $item) use ($id){

            $queryBuilder = $this->entityManager->createQueryBuilder();
            $queryBuilder->select('h')
                ->from(Hurtowe::class, 'h')
                ->where('h.id = :id')
                ->setParameter('id', $id)
                ->orderBy('h.id', 'ASC');

            $hurtoweEntity = $queryBuilder->getQuery()->getResult();
            return $hurtoweEntity;
        });

        $kompozycja = '';

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
                    'id_wpisu_zamowienia'=> $i
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
                        'id_wpisu_zamowienia'=> $i
                    );
                }
            }
        }
//dd($hurtoweEntity[0]->getKontrahent());
        //wstecz
        $link = $this->generateUrl(
            'index',
            [
                'crudAction' => Action::EDIT,
                'crudControllerFqcn' => HurtoweCrudController::class,
                'entityId' => $id,
            ]
        );

        $kontrahent = $hurtoweEntity[0]?->getKontrahent() ?? '---';



        return $this->render('admin/hurtowe/zestawienie_fv.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'kwota' =>  $suma = str_replace('.', ',', $hurtoweEntity[0]->getSuma()),
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'zamowienie_id' => $id,
            'wstecz' => $link,
            'nazwa' => $kompozycja,
            'uwagi' => $hurtoweEntity[0]->getUwagi(),
            'kontrahent' => $kontrahent
        ]);
    }

//fv -krok2
    #[Route('/fv_krok_2/{id}', name: 'fv_krok_2')]
    public function getHurtoweZamowienieFvBeforeApi(int $id, Request $request)
    {
        $cena = $request->request->get('cena');
        $ilePozycji = $request->request->get('ile_pozycji');

        $cache = new FilesystemAdapter();
        //jesli nie ma w cache - zaciagnij z callback
        $hurtoweEntity = $cache->get($id, function(ItemInterface $item) use ($id){

            $queryBuilder = $this->entityManager->createQueryBuilder();
            $queryBuilder->select('h')
                ->from(Hurtowe::class, 'h')
                ->where('h.id = :id')
                ->setParameter('id', $id)
                ->orderBy('h.id', 'ASC');

            $hurtoweEntity = $queryBuilder->getQuery()->getResult();
            return $hurtoweEntity;
        });

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
                    'id_wpisu_zamowienia'=> $i
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
                        'id_wpisu_zamowienia'=> $i
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

        return $this->render('admin/hurtowe/zestawienie_fv_krok2.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'kwota' =>  $suma = str_replace('.', ',', $hurtoweEntity[0]->getSuma()),
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link,
            'zamowienie_id' => $id,
        ]);
    }

    //fv -krok3
    #[Route('/fv_krok_3/{id}', name: 'fv_krok_3')]
    public function getHurtoweZamowienieFvPreview(int $id, Request $request)
    {
        //dd($request->request);
        $ceny = $request->request->all()['ceny'] ?? [];
        $nazwy = $request->request->all()['nazwa'] ?? [];
        $kody = [];


        $repository = $this->entityManager->getRepository(FvKody::class);


        foreach ($ceny as $cena) {
            if (!empty($cena)) {
                // Znajdź kod z encji FvKody o danej cenie
                $fvKod = $repository->findOneBy(['cena' => $cena]);

                if ($fvKod) {
                    // Dodaj kod do tablicy
                    $kody[] = $fvKod->getKod(); // Zakładając, że istnieje metoda getKod w encji FvKody
                } else {
                    $kody[] = ''; // Jeśli kod nie został znaleziony, dodaj pusty ciąg znaków
                }
            } else {
                $kody[] = ''; // Jeśli cena jest pusta, dodaj pusty ciąg znaków
            }
        }

        // Podmień nazwy na kody w oryginalnej tablicy
        foreach ($nazwy as $key => $nazwa) {
            if (isset($kody[$key])) {
                $nazwy[$key] = $kody[$key];
            }
        }

        $cache = new FilesystemAdapter();
        //jesli nie ma w cache - zaciagnij z callback
        $hurtoweEntity = $cache->get($id, function(ItemInterface $item) use ($id){

            $queryBuilder = $this->entityManager->createQueryBuilder();
            $queryBuilder->select('h')
                ->from(Hurtowe::class, 'h')
                ->where('h.id = :id')
                ->setParameter('id', $id)
                ->orderBy('h.id', 'ASC');

            $hurtoweEntity = $queryBuilder->getQuery()->getResult();
            return $hurtoweEntity;
        });

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
                    'id_wpisu_zamowienia'=> $i,
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
                        'id_wpisu_zamowienia'=> $i
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

        return $this->render('admin/hurtowe/zestawienie_fv_krok3.html.twig', [
            'id' => $id,
            'wozki' => $wozki,
            'kwota' =>  $suma = str_replace('.', ',', $hurtoweEntity[0]->getSuma()),
            'klient' => $hurtoweEntity[0]->getNazwa(),
            'wstecz' => $link,
            'zamowienie_id' => $id,
            'kody' => $kody,
        ]);
    }

    //fv -krok4
    #[Route('/fv_krok_4/{id}', name: 'fv_krok_4')]
    public function sendToFakturaXL(int $id, Request $request):Response
    {

//        $input_xml = "
//<dokument>
//
//  <api_token>2eGrUfPaw1U04G5TG9maM9sPntgXKRaDMj5deAJ9K5tBcg5C7ujKfvYHONhBORsCoYoXqDFqMBXxBHVp</api_token>
//
//</dokument>
//";
//dd($input_xml);
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, 'https://program.fakturaxl.pl/api/lista_klientow.php');
//        curl_setopt($ch, CURLOPT_POSTFIELDS,  $input_xml);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
//        $return_xml = curl_exec($ch);
//        curl_close($ch);

//     //   dd($request->request);


        // Dane otrzymane z żądania
        $nazwy = $request->request->all()['nazwa'] ?? [];
        $sztuki = $request->request->all()['sztuki'] ?? [];
        $ceny = $request->request->all()['ceny'] ?? [];
        $kwota_oplacona = $request->request->all()['kwota_oplacona'] ?? [];
        $vat = $request->request->get('vat');
        $rodzaj_platnosci = $request->request->get('rodzaj_platnosci');
        $today = date('Y-m-d');
        // Data płatności (14 dni po dzisiejszej dacie)
        $paymentDueDate = date('Y-m-d', strtotime($today . ' + 14 days'));

        $hurtowe = $this->entityManager->getRepository(Hurtowe::class)->find($id);
        $id_usera = $hurtowe->getKontrahent()->getId();

        $kontrahent = $this->entityManager->getRepository(User::class)->find($id_usera);

        $roles = $kontrahent->getRoles();
        $firma = in_array('ROLE_KLIENT_FIRMA', $roles) ? 0 : 1;

        // Tworzymy XML na podstawie otrzymanych danych
        $input_xml = "
<dokument>
  <api_token>2eGrUfPaw1U04G5TG9maM9sPntgXKRaDMj5deAJ9K5tBcg5C7ujKfvYHONhBORsCoYoXqDFqMBXxBHVp</api_token>
  <typ_faktury>0</typ_faktury>
  <typ_faktur_podtyp>0</typ_faktur_podtyp>
  <obliczaj_sume_wartosci_faktury_wg>0</obliczaj_sume_wartosci_faktury_wg>
  <numer_faktury></numer_faktury>
  <data_wystawienia>{$today}</data_wystawienia>
  <data_sprzedazy>{$today}</data_sprzedazy>
  <termin_platnosci_data>{$paymentDueDate}</termin_platnosci_data>
  <data_oplacenia>" . (!empty($kwota_oplacona) ? $today : '') . "</data_oplacenia>
  <kwota_oplacona>{$kwota_oplacona}</kwota_oplacona>
  <uwagi></uwagi>
  <waluta>PLN</waluta>
  <kurs></kurs>
  <rodzaj_platnosci>{$rodzaj_platnosci}</rodzaj_platnosci>
  <jezyk>0</jezyk>
  <szablon>0</szablon>
  <imie_nazwisko_wystawcy></imie_nazwisko_wystawcy>
  <imie_nazwisko_odbiorcy></imie_nazwisko_odbiorcy>
  <nr_zamowienia></nr_zamowienia>
  <dodatkowe_uwagi></dodatkowe_uwagi>
  <id_dzialy_firmy>150539</id_dzialy_firmy>
  <wyslij_dokument_do_klienta_emailem>0</wyslij_dokument_do_klienta_emailem>
  <magazyn_id></magazyn_id>
  <automatyczne_tworzenie_dokumentu_magazynowego></automatyczne_tworzenie_dokumentu_magazynowego>
  <obliczaj_wartosc_faktury_od>0</obliczaj_wartosc_faktury_od>
  <notatka_prywatna></notatka_prywatna>
  
    <nabywca>
    <firma_lub_osoba_prywatna>{$firma}</firma_lub_osoba_prywatna>
    <nazwa>{$kontrahent->getName()}</nazwa>
    <imie></imie>
    <nazwisko></nazwisko>
    <nip>{$kontrahent->getNip()}</nip>
    <ulica_i_numer>{$kontrahent->getStreetAndNumber()}</ulica_i_numer>
    <kod_pocztowy>{$kontrahent->getPostalCode()}</kod_pocztowy>
    <miejscowosc>{$kontrahent->getCity()}</miejscowosc>
    <kraj>{$kontrahent->getCountryId()}</kraj>
    <email></email>
    <telefon></telefon>
    <fax></fax>
    <www></www>
    <nr_konta_bankowego></nr_konta_bankowego>
  </nabywca>
";

        // Dodajemy pozycje faktury
        foreach ($nazwy as $index => $nazwa) {
            $wartosc_brutto = (float)$ceny[$index] * (float)$sztuki[$index];


            $input_xml .= "
  <faktura_pozycje>
    <nazwa>{$nazwa}</nazwa>
    <kod_produktu></kod_produktu>
    <produkt_id></produkt_id>
    <pkwiu></pkwiu>
    <symbol_gtu></symbol_gtu>
    <ilosc>{$sztuki[$index]}</ilosc>
    <jm>szt.</jm>
    <vat>{$vat}</vat>
    <wartosc_brutto>{$wartosc_brutto}</wartosc_brutto>
  </faktura_pozycje>";
        }

        // Dodajemy pozostałe elementy XML
        $input_xml .= "
  <tag>nazwa 1</tag>
  <tag>nazwa 2</tag>
</dokument>";


//dd($input_xml);
        // Wysyłamy żądanie POST do API fakturaxl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://program.fakturaxl.pl/api/dokument_dodaj.php');
        curl_setopt($ch, CURLOPT_POSTFIELDS,  $input_xml );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        $return_xml = curl_exec($ch);
        curl_close($ch);




//LOCAL - OK:
//$return_xml = "
//<dokument>
//<kod>1</kod>
//<dokument_id>16617932</dokument_id>
//<dokumnet_nr>FV 2/02/2024</dokumnet_nr>
//<dokument_nr>FV 2/02/2024</dokument_nr>
//<unikatowy_kod>51QXG57PyTbDhrROMyEt5HGzyokOO22YtmoB0m5hoWdS2K48TSacxsSpVEWVwR8Kxw80eF17KqZt7VvZ</unikatowy_kod>
//</dokument>
//";

        $xml = simplexml_load_string($return_xml);

        // Pobranie kodu błędu z odpowiedzi API
        $errorCode = (int) $xml->kod;

        if ($errorCode == 1){


            $hurtowe->setFvWystawiono(new \DateTimeImmutable());
            $hurtowe->setFv(false);

            $this->entityManager->persist($hurtowe);
            $this->entityManager->flush();
        }

        $errorMessages = [
            '1' => 'FV została zapisana pomyślnie.',
            '2' => 'Przekroczono ilość zapytań na sekundę, prosimy spróbować za 5 sekund.',
            '3' => 'Nie istnieje taki api_token.',
            '4' => 'Nie istnieje dokument o takim ID.',
            '5' => 'Dokument został poprawnie odczytany.',
            '6' => 'Błędny typ dokumentu.',
            '7' => 'Dokument o takim numerze już istnieje.',
            '8' => 'Nie istnieje taki id_dzialy_firmy.',
            '9' => 'Nazwa Nabywcy nie może być pusta.',
            '10' => 'Nieprawidłowy NIP.',
            '11' => 'Błędny kraj.',
            '12' => 'Nazwa produktu nie może być pusta.',
            '13' => 'Data musi mieć postać yyyy-mm-dd.',
            '14' => 'Błędny status.',
            '15' => 'Błędna waluta.',
            '16' => 'Brak kursu dla tej daty, nie można wystawić faktury.',
            '17' => 'Błędny język.',
            '18' => 'Błędny rodzaj_platnosci.',
            '19' => 'Limit bezpłatnych faktur w darmowym pakiecie został osiągnięty - prosimy o zakup Pakietu Pełnego.',
            '20' => 'Dokument został poprawnie skasowany.',
            '21' => 'Miesiąc został zamknięty nie można w nim dodawać ani wprowadzać nowych faktur.',
            '22' => 'Wysłanie faktury na email nie powiodło się z powodu braku adresu email nabywcy na fakturze.',
            '23' => 'Poprawne wysłanie dokumentu emailem.',
            '24' => 'Nieprawidłowe pole magazyn_id.',
            '25' => 'Przekroczono maksymalny rozmiar przesyłanego pliku.',
            '26' => 'Nie istnieje produkt o takiej nazwie.',
            '27' => 'Dział o takim ID nie istnieje.',
            '28' => 'Maksymalny zakres dat do 31 dni.',
            '29' => 'Brak numeru dokumentu.',
            '30' => 'Dokument główny posiada już relację z innym dokumentem.',
            '31' => 'Dokument podłączany posiada już relację z innym dokumentem.',
            '33' => 'Dokument został poprawnie zapisany.',
            '34' => 'Nie została wprowadzona żadna zmiana w dokumencie.',
            '35' => 'Kwota wpłaty musi być większa od 0.',
            '36' => 'Za duża ilość wpłat.',
            '37' => 'Dokument został już wcześniej opłacony.',
            '38' => 'Imię nie może być puste.',
            '39' => 'Nazwisko nie może być puste.',
            '40' => 'Nie istnieje dokument korygowany o tym ID.',
            '41' => 'Waluta w dokumencie korygującym musi być taka sama jak w dokumencie korygowanym.',
            '42' => 'Nieprawidłowe wykorzystanie API prosimy o kontakt z bok@fakturaxl.pl.',
            '43' => 'Nie można korygować tego typu dokumentu.',
            '44' => 'Brak wystarczającej ilości produktów w magazynie.',
            '45' => 'Nie można skasować dokumentu ponieważ został już przesłany do KSeF.',
            '46' => 'Dokument nie został skasowany.',
            '47' => 'Maksymalna ilość pozycji na dokumencie to 700.',
            '48' => 'Nie można wysłać dokumentu ponieważ nie został jeszcze nadany numer KSeF.',
            '49' => 'Dokument został prawidłowo przesłany do KSeF.',
            '50' => 'Błąd podczas wysyłania dokumentu do KSeF.',
            '51' => 'Dokument został już wcześniej wysłany do KSeF.',
            '52' => 'W celu wysyłania i pobierania faktur z Krajowego Systemu e-Faktur należy w ustawieniach dodać połączenie do KSeF.',
            '53' => 'Numer KSeF został poprawnie nadany.',
            '54' => 'Numer KSeF nie został poprawnie nadany.',
            '55' => 'Dokument o tym ID nie został wcześniej wysłany do KSeF.',
            '56' => 'OSS - NIP nabywcy musi być pusty.',
            '57' => 'OSS - kraj nabywcy musi należeć do jednego z krajów UE z wyłączeniem Polski.',
            '58' => 'OSS - nieprawidłowa wybrana stawka VAT dla wybranego kraju.',
            '59' => 'OSS - prosimy o podanie parametru oss_kraj_wysylki_id.',
            '60' => 'Brak podanego produkt_id.',
            '61' => 'Tagi zostały poprawnie dodane.',
            '62' => 'Tagi zostały skasowane.',
            '900' => 'Trwają prace konserwacyjne, zapraszamy za kilka minut.'
        ];

        // Przekazanie danych do widoku
        return $this->render('admin/hurtowe/zestawienie_fv_krok_4.html.twig', [
            'dokument' => $xml,
            'kod' => $errorCode,
            'wiadomosc' => $errorMessages[$errorCode],
            'id' => $id
        ]);

    }


//    ------------------extend!
    #[Route('/admin', name: 'admin_dashboard')]
    public function index(): Response
    {

        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {

        return Dashboard::new()
            ->setTitle('DANMAL - PANEL');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Główne');
        yield MenuItem::linkToUrl('Panel', 'fa fa-home', $this->generateUrl('admin_dashboard'));
        yield MenuItem::linkToUrl('Sklep', 'fa fa-shopping-cart', $this->generateUrl('app_sklep'));

        if ($this->security->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('CENNIK');
            yield MenuItem::linkToCrud('Półprodukty', 'fa fa-fan', Polprodukty::class);
            yield MenuItem::linkToCrud('Wycena kompozycji', 'fa fa-tags', Wyceny::class);

            yield MenuItem::subMenu('Konfiguracja', 'fa fa-article')->setSubItems([
                MenuItem::linkToCrud('Grupy kompozycji', 'fa fa-tags', Grupy::class),
                MenuItem::linkToCrud('Domyślna grupa', 'fa fa-star', DomyslnaGrupa::class),
                MenuItem::linkToCrud('Dostawcy', 'fa fa-car', Dostawcy::class),
            ]);

            yield MenuItem::section('ZAMÓWIENIA');
            yield MenuItem::linkToCrud('Hurtowe', 'fa fa-shop', Hurtowe::class);
//            yield MenuItem::linkToCrud('Detal', 'fa fa-receipt', Zamowienie::class);

            yield MenuItem::section('FV');
            yield MenuItem::linkToCrud('Kody na FV', 'fa fa-money', FvKody::class);


            yield MenuItem::section('UŻYTKOWNICY');
            yield MenuItem::linkToRoute('Dodaj użytkownika', 'fa fa-user-plus', 'app_register');
            yield MenuItem::linkToCrud('Lista użytkowników', 'fa fa-users', User::class);


            if ($this->security->getUser()->getUserIdentifier() == 'admin@admin.pl') {
                yield MenuItem::section('TESTY MARIUSZA');
                yield MenuItem::linkToRoute('API GOOGLE', 'fa-solid fa-magnifying-glass', 'app_es');
                yield MenuItem::linkToCrud('comment', 'fa-solid fa-address-book', Comment::class);
            }
        }

        if ($this->security->isGranted('ROLE_PRACOWNIK') OR $this->security->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('PRACOWNIK');
            yield MenuItem::linkToCrud('Zeszyt', 'fa-solid fa-address-book', Zeszyt::class);
        }

        yield MenuItem::section('------------------');

        yield MenuItem::linkToLogout('Wyloguj', 'fa fa-sign-out');

    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setAvatarUrl($user->getAvatarUrl());
    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }


}