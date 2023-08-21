<?php

namespace App\Service;

use App\Controller\Admin\HurtoweCrudController;
use App\Entity\Hurtowe;
use App\Entity\Wyceny;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class WozekService
{
    //całe zamówienie - wszystkie wózki
    #[Route('/hurtowe/{id}', name: 'app_get_hurtowe_zestawienie')]
    public function getHurtoweZestawienie(?int $id, AdminUrlGenerator $adminUrlGenerator)
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
                    'cena'=> str_replace('.', ',', $hurtoweEntity[0]->{"getCena" . $i}()));
            }
        }
        ksort($wozki);

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
            'wstecz' => $link
        ]);
    }
}