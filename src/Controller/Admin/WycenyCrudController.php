<?php

namespace App\Controller\Admin;

use App\Entity\DomyslnaGrupa;
use App\Entity\Grupy;
use App\Entity\Polprodukty;
use App\Entity\Wyceny;
use App\Repository\WycenyRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WycenyCrudController extends AbstractCrudController
{

    private $entityManager;
    private $selectedSkladowa1;

    private $wycenyRepository;

    public function __construct(EntityManagerInterface $entityManager, WycenyRepository $wycenyRepository)
    {
        $this->entityManager = $entityManager;
        $this->wycenyRepository = $wycenyRepository;

        $this->selectedSkladowa1 = $this->entityManager->getRepository(Polprodukty::class)->find(1);

    }
    public static function getEntityFqcn(): string
    {
        return Wyceny::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $id =1 ;

        $defaultGrupa = $this->entityManager->getRepository(Grupy::class)->findOneBy([], ['id' => 'ASC']);
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('nazwa')->setLabel('Nazwa kompozycji'),
            AssociationField::new('skladowa1')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
//                ->setQueryBuilder(function ($queryBuilder) use ($id) {
//                    $queryBuilder
//                        ->select('p')
//                        ->from(Polprodukty::class, 'p')
//                        ->where('p.id = :id')
//                        ->setParameter('id', $id);
//                }),
            AssociationField::new('skladowa1')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk1')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena1')
                ->hideOnIndex(),
            NumberField::new('wartosc1')
                ->hideOnIndex(),

            AssociationField::new('skladowa2')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk2')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena2')
                ->hideOnIndex(),
            NumberField::new('wartosc2')
                ->hideOnIndex(),

            AssociationField::new('skladowa3')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk3')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena3')
                ->hideOnIndex(),
            NumberField::new('wartosc3')
                ->hideOnIndex(),

            AssociationField::new('skladowa4')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk4')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena4')
                ->hideOnIndex(),
            NumberField::new('wartosc4')
                ->hideOnIndex(),

            AssociationField::new('skladowa5')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk5')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena5')
                ->hideOnIndex(),
            NumberField::new('wartosc5')
                ->hideOnIndex(),

            AssociationField::new('skladowa6')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk6')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena6')
                ->hideOnIndex(),
            NumberField::new('wartosc6')
                ->hideOnIndex(),

            AssociationField::new('skladowa7')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Podkład')
                ->hideOnIndex(),
            NumberField::new('sztuk7')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena7')
                ->hideOnIndex(),
            NumberField::new('wartosc7')
                ->hideOnIndex(),
            TextField::new('nazwa7')
            ->hideOnIndex(),


            AssociationField::new('skladowa8')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk8')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena8')
                ->hideOnIndex(),
            NumberField::new('wartosc8')
                ->hideOnIndex(),
            TextField::new('nazwa8')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt8')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa9')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk9')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena9')
                ->hideOnIndex(),
            NumberField::new('wartosc9')
                ->hideOnIndex(),
            TextField::new('nazwa9')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt9')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa10')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk10')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena10')
                ->hideOnIndex(),
            NumberField::new('wartosc10')
                ->hideOnIndex(),
            TextField::new('nazwa10')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt10')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa11')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk11')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena11')
                ->hideOnIndex(),
            NumberField::new('wartosc11')
                ->hideOnIndex(),
            TextField::new('nazwa11')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt11')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa12')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk12')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena12')
                ->hideOnIndex(),
            NumberField::new('wartosc12')
                ->hideOnIndex(),
            TextField::new('nazwa12')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt12')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa13')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk13')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena13')
                ->hideOnIndex(),
            NumberField::new('wartosc13')
                ->hideOnIndex(),
            TextField::new('nazwa13')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt13')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa14')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk14')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena14')
                ->hideOnIndex(),
            NumberField::new('wartosc14')
                ->hideOnIndex(),
            TextField::new('nazwa14')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt14')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa15')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk15')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena15')
                ->hideOnIndex(),
            NumberField::new('wartosc15')
                ->hideOnIndex(),
            TextField::new('nazwa15')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt15')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa16')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk16')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena16')
                ->hideOnIndex(),
            NumberField::new('wartosc16')
                ->hideOnIndex(),
            TextField::new('nazwa16')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt16')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa17')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk17')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena17')
                ->hideOnIndex(),
            NumberField::new('wartosc17')
                ->hideOnIndex(),
            TextField::new('nazwa17')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt17')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa18')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk18')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena18')
                ->hideOnIndex(),
            NumberField::new('wartosc18')
                ->hideOnIndex(),
            TextField::new('nazwa18')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt18')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa19')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk19')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena19')
                ->hideOnIndex(),
            NumberField::new('wartosc19')
                ->hideOnIndex(),
            TextField::new('nazwa19')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt19')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa20')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk20')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena20')
                ->hideOnIndex(),
            NumberField::new('wartosc20')
                ->hideOnIndex(),
            TextField::new('nazwa20')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt20')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),

            AssociationField::new('skladowa21')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk21')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena21')
                ->hideOnIndex(),
            NumberField::new('wartosc21')
                ->hideOnIndex(),
            TextField::new('nazwa21')
                ->hideOnIndex(),
            BooleanField::new('dodacPolprodukt21')->renderAsSwitch(false)
                ->setLabel('Zapisz')
                ->hideOnIndex(),


            AssociationField::new('skladowa22')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk22')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena22')
                ->hideOnIndex(),
            NumberField::new('wartosc22')
                ->hideOnIndex(),


            AssociationField::new('skladowa23')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk23')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena23')
                ->hideOnIndex(),
            NumberField::new('wartosc23')
                ->hideOnIndex(),


            AssociationField::new('skladowa24')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk24')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena24')
                ->hideOnIndex(),
            NumberField::new('wartosc24')
                ->hideOnIndex(),

            AssociationField::new('skladowa25')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk25')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena25')
                ->hideOnIndex(),
            NumberField::new('wartosc25')
                ->hideOnIndex(),

            AssociationField::new('skladowa26')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk26')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena26')
                ->hideOnIndex(),
            NumberField::new('wartosc26')
                ->hideOnIndex(),

            AssociationField::new('skladowa27')
                ->autocomplete()
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk27')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena27')
                ->hideOnIndex(),
            NumberField::new('wartosc27')
                ->hideOnIndex(),

            AssociationField::new('skladowa28')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk28')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena28')
                ->hideOnIndex(),
            NumberField::new('wartosc28')
                ->hideOnIndex(),

            AssociationField::new('skladowa29')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk29')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena29')
                ->hideOnIndex(),
            NumberField::new('wartosc29')
                ->hideOnIndex(),
            TextField::new('nazwa29')
                ->hideOnIndex(),

            AssociationField::new('skladowa30')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk30')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena30')
                ->hideOnIndex(),
            NumberField::new('wartosc30')
                ->hideOnIndex(),
            TextField::new('nazwa30')
                ->hideOnIndex(),

            AssociationField::new('skladowa31')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk31')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena31')
                ->hideOnIndex(),
            NumberField::new('wartosc31')
                ->hideOnIndex(),
            TextField::new('nazwa31')
                ->hideOnIndex(),

            AssociationField::new('skladowa32')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk32')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena32')
                ->hideOnIndex(),
            NumberField::new('wartosc32')
                ->hideOnIndex(),
            TextField::new('nazwa32')
                ->hideOnIndex(),

            AssociationField::new('skladowa33')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk33')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena33')
                ->hideOnIndex(),
            NumberField::new('wartosc33')
                ->hideOnIndex(),
            TextField::new('nazwa33')
                ->hideOnIndex(),

            AssociationField::new('skladowa34')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk34')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena34')
                ->hideOnIndex(),
            NumberField::new('wartosc34')
                ->hideOnIndex(),
            TextField::new('nazwa34')
                ->hideOnIndex(),

            AssociationField::new('skladowa35')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk35')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena35')
                ->hideOnIndex(),
            NumberField::new('wartosc35')
                ->hideOnIndex(),
            TextField::new('nazwa35')
                ->hideOnIndex(),

            AssociationField::new('skladowa36')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk36')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena36')
                ->hideOnIndex(),
            NumberField::new('wartosc36')
                ->hideOnIndex(),
            TextField::new('nazwa36')
                ->hideOnIndex(),

            AssociationField::new('skladowa37')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk37')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena37')
                ->hideOnIndex(),
            NumberField::new('wartosc37')
                ->hideOnIndex(),
            TextField::new('nazwa37')
                ->hideOnIndex(),

            AssociationField::new('skladowa38')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk38')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena38')
                ->hideOnIndex(),
            NumberField::new('wartosc38')
                ->hideOnIndex(),
            TextField::new('nazwa38')
                ->hideOnIndex(),

            AssociationField::new('skladowa39')
                ->autocomplete()
                ->setRequired(false)
                ->setLabel('Składowa')
                ->hideOnIndex(),
            NumberField::new('sztuk39')
                ->setLabel('Szt.')
                ->hideOnIndex(),
            NumberField::new('cena39')
                ->hideOnIndex(),
            NumberField::new('wartosc39')
                ->hideOnIndex(),
            TextField::new('nazwa39')
                ->hideOnIndex(),
            NumberField::new('marza_solo')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('marza_wazon')
                ->setRequired(false)
                ->hideOnIndex(),

            NumberField::new('cena_solo')
                ->setLabel('Solo'),
            NumberField::new('cena_wazon')
                ->setLabel('Wazon'),
            NumberField::new('cena_kpl')
                ->setLabel('Kpl'),
            NumberField::new('cena_kpl_2w')
                ->setLabel('Kpl 2w')
                ->hideOnIndex(),

            ImageField::new('zdjecie')
                ->setLabel('Kpl. / główne zdjęcie')
                ->setBasePath('uploads/kompozycje')
                ->setUploadDir('public/uploads/kompozycje')
                ->setUploadedFileNamePattern('kpl-[slug]-[timestamp].[extension]'),

            ImageField::new('zdjecie_solo')
                ->setLabel('Zdjęcie solo')
                ->setBasePath('uploads/kompozycje')
                ->setUploadDir('public/uploads/kompozycje')
                ->setUploadedFileNamePattern('solo-[slug]-[timestamp].[extension]')
                ->hideOnIndex(),

            ImageField::new('zdjecie_wazon')
                ->setLabel('Zdjęcie wazon')
                ->setBasePath('uploads/kompozycje')
                ->setUploadDir('public/uploads/kompozycje')
                ->setUploadedFileNamePattern('wazon-[slug]-[timestamp].[extension]')
                ->hideOnIndex(),

            BooleanField::new('aktywny')
                ->renderAsSwitch(true),


            AssociationField::new('grupa')
                ->setRequired(false)
                ->autocomplete()
                ->setCustomOption('value', $defaultGrupa),

            DateTimeField::new('createdAt')
                ->setLabel('Utworzono:')
                ->setDisabled()
                ->hideOnIndex(),

            DateTimeField::new('updatedAt')
                ->setLabel('Ostatnio zmodyfikowano:')
                ->setDisabled()
                ->hideOnIndex(),

//            BooleanField::new('blokujMarzaSolo')
//                ->renderAsSwitch(true),
            BooleanField::new('blokujMarzaSolo')->renderAsSwitch(false)
                ->setLabel('Zablokuj')
                ->hideOnIndex(),

//            BooleanField::new('blokujMarzaWazon')
//                ->renderAsSwitch(true),
            BooleanField::new('blokujMarzaWazon')->renderAsSwitch(false)
                ->setLabel('Zablokuj')
                ->hideOnIndex(),

        ];
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addJsFile('build/custom2.js')
            ;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // ...
            ->setPageTitle('new', 'Nowa wycena')
            ->setPageTitle('index', 'Lista wycen')
            ->setPageTitle('edit', 'Edycja wyceny')
            ->overrideTemplate('crud/new', 'admin/wyceny/new.html.twig')
            ->overrideTemplate('crud/edit', 'admin/wyceny/edit.html.twig')
            ->setEntityLabelInPlural('Wyceny')
            ->setEntityLabelInSingular('wycenę')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ->setDefaultSort([
                'id' => 'DESC'
            ])

            ;
    }

    public function createEntity(string $entityFqcn) {
        $wycena = new Wyceny();

        /*
         * SOLO:
         * skladowa1-6
         * skladowa 7: podklad
         * skladowa:8-18 wolne + DO WAZONU
         * 19-21 -tylko w solo
         *
         *
         */

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(1);
        $wycena->setSkladowa1($polprodukt);
        $wycena->setSztuk1(1);
        $wycena->setCena1($polprodukt->getCena());
        $wycena->setWartosc1($wycena->getSztuk1() * $wycena->getCena1());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(2);
        $wycena->setSkladowa2($polprodukt);
        $wycena->setCena2($polprodukt->getCena());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(3);
        $wycena->setSkladowa3($polprodukt);
        $wycena->setCena3($polprodukt->getCena());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(4);
        $wycena->setSkladowa4($polprodukt);
        $wycena->setSztuk4(1);
        $wycena->setCena4($polprodukt->getCena());
        $wycena->setWartosc4($wycena->getSztuk4() * $wycena->getCena4());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(5);
        $wycena->setSkladowa5($polprodukt);
        $wycena->setSztuk5(1);
        $wycena->setCena5($polprodukt->getCena());
        $wycena->setWartosc5($wycena->getSztuk5() * $wycena->getCena5());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(6);
        $wycena->setSkladowa6($polprodukt);
        $wycena->setSztuk6(1);
        $wycena->setCena6(0);

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(7);
        $wycena->setSkladowa7($polprodukt);
        $wycena->setSztuk7(1);
        $wycena->setCena7(0);

        //wazon

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(1);
        $wycena->setSkladowa22($polprodukt);
        $wycena->setSztuk22(1);
        $wycena->setCena22($polprodukt->getCena());
        $wycena->setWartosc22($wycena->getSztuk22() * $wycena->getCena22());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(2);
        $wycena->setSkladowa23($polprodukt);
        $wycena->setCena23($polprodukt->getCena());
        $wycena->setWartosc23($wycena->getSztuk23() * $wycena->getCena23());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(3);
        $wycena->setSkladowa24($polprodukt);
        $wycena->setCena24($polprodukt->getCena());
        $wycena->setWartosc24($wycena->getSztuk24() * $wycena->getCena24());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(4);
        $wycena->setSkladowa25($polprodukt);
        $wycena->setCena25($polprodukt->getCena());
        $wycena->setWartosc25($wycena->getSztuk25() * $wycena->getCena25());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(5);
        $wycena->setSkladowa26($polprodukt);
        $wycena->setSztuk26(1);
        $wycena->setCena26($polprodukt->getCena());
        $wycena->setWartosc26($wycena->getSztuk26() * $wycena->getCena26());

        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(6);
        $wycena->setSkladowa27($polprodukt);
        $wycena->setSztuk27(1);
        $wycena->setCena27($polprodukt->getCena());
        $wycena->setWartosc27($wycena->getSztuk27() * $wycena->getCena27());

        //ID 8 - WAZON
        $polprodukt = $this->entityManager->getRepository(Polprodukty::class)->find(8);
        $wycena->setSkladowa28($polprodukt);
        $wycena->setSztuk28(1);
        $wycena->setCena28($polprodukt->getCena());
        $wycena->setWartosc28($wycena->getSztuk28() * $wycena->getCena28());

        $defaultGrupa = $this->entityManager->getRepository(DomyslnaGrupa::class)->findOneBy([], ['id' => 'ASC']);
//        $defaultGrupa = $this->entityManager->getRepository(DomyslnaGrupa::class)->find(5);
//dd($defaultGrupa->getDomyslnaGrupa());
        $wycena->setGrupa($defaultGrupa->getDomyslnaGrupa());

        return $wycena;
    }


    #[Route('/kompozycja/{id}/{cena}', name: 'app_get_cena_kompozycja')]
    public function getCena(?int $id, ?string $cena): JsonResponse
    {


        switch ($cena) {
            case 'kpl':
                $cenaValue = $this->wycenyRepository->findOneBy(['id' => $id])->getCenaKpl();
                break;
            case 'solo':
                $cenaValue = $this->wycenyRepository->findOneBy(['id' => $id])->getCenaSolo();
                break;
            case 'wazon':
                $cenaValue = $this->wycenyRepository->findOneBy(['id' => $id])->getCenaWazon();
                break;
            case '2w':
                $cenaValue = $this->wycenyRepository->findOneBy(['id' => $id])->getCenaKpl2w();
                break;
            default:
                $cenaValue = 0;
                break;
        }

        $nazwa = $this->wycenyRepository->findOneBy(['id' => $id])->getNazwa();


        // Return the cena value as a JSON response
        return new JsonResponse(['cena' => $cenaValue, 'nazwa' => $nazwa]);
    }

}
