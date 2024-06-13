<?php

namespace App\Controller\Admin;

use App\Entity\HurtoweZamowienia;
use App\Entity\User;
use App\Entity\Wyceny;
use App\Repository\HurtoweRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Contracts\Cache\ItemInterface;

class HurtoweZamowieniaCrudController extends AbstractCrudController
{

    private $entityManager;
    private $requestStack;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
        $this->security = $security;
    }


    public static function getEntityFqcn(): string
    {
        return HurtoweZamowienia::class;
    }


    public function configureFields(string $pageName): iterable
    {


        return [
            AssociationField::new('kontrahent')
                ->autocomplete()
                ->setLabel('Klient')
                ->setRequired(false),
            TextField::new('nazwa')
                ->setLabel('Krótka nazwa')
                ->setRequired(false),
            AssociationField::new('kompozycja1')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk1')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena1')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc1')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa1')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek1')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja2')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk2')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena2')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc2')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa2')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek2')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja3')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk3')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena3')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc3')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa3')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek3')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja4')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk4')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena4')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc4')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa4')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek4')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja5')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk5')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena5')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc5')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa5')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek5')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja6')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk6')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena6')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc6')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa6')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek6')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja7')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk7')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena7')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc7')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa7')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek7')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja8')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk8')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena8')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc8')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa8')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek8')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja9')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk9')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena9')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc9')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa9')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek9')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja10')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk10')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena10')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc10')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa10')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek10')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja11')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk11')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena11')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc11')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa11')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek11')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja12')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk12')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena12')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc12')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa12')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek12')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja13')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk13')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena13')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc13')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa13')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek13')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja14')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk14')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena14')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc14')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa14')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek14')
                ->hideOnIndex()
                ->setRequired(false),

            TextField::new('wozek15')
                ->hideOnIndex()
                ->setRequired(false),
            AssociationField::new('kompozycja15')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk15')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena15')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc15')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa15')
                ->setRequired(false)
                ->hideOnIndex(),

            TextField::new('wozek16')
                ->hideOnIndex()
                ->setRequired(false),
            AssociationField::new('kompozycja16')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk16')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena16')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc16')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa16')
                ->setRequired(false)
                ->hideOnIndex(),

            AssociationField::new('kompozycja17')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk17')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena17')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc17')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa17')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek17')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja18')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk18')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena18')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc18')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa18')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek18')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja19')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk19')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena19')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc19')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa19')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek19')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja20')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk20')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena20')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc20')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa20')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek20')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja21')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk21')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena21')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc21')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa21')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek21')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja22')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk22')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena22')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc22')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa22')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek22')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja23')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk23')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena23')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc23')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa23')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek23')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja24')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk24')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena24')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc24')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa24')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek24')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja25')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk25')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena25')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc25')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa25')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek25')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja26')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk26')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena26')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc26')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa26')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek26')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja27')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk27')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena27')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc27')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa27')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek27')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja28')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk28')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena28')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc28')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa28')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek28')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja29')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk29')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena29')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc29')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa29')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek29')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja30')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk30')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena30')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc30')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa30')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek30')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja31')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk31')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena31')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc31')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa31')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek31')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja32')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk32')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena32')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc32')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa32')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek32')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja33')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk33')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena33')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc33')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa33')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek33')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja34')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk34')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena34')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc34')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa34')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek34')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja35')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk35')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena35')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc35')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa35')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek35')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja36')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk36')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena36')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc36')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa36')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek36')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja37')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk37')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena37')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc37')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa37')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek37')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja38')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk38')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena38')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc38')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa38')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek38')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja39')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk39')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena39')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc39')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa39')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek39')
                ->hideOnIndex()
                ->setRequired(false),

            AssociationField::new('kompozycja40')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(false)
                ->hideOnIndex(),
            IntegerField::new('sztuk40')
                ->setLabel('Szt.')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('cena40')
                ->setRequired(false)
                ->hideOnIndex(),
            NumberField::new('wartosc40')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('nazwa40')
                ->setRequired(false)
                ->hideOnIndex(),
            TextField::new('wozek40')
                ->hideOnIndex()
                ->setRequired(false),

            NumberField::new('suma')
                ->setRequired(false),

            ChoiceField::new('rodzaj1')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj2')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj3')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj4')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj5')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj6')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj7')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj8')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj9')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj10')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj11')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj12')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj13')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj14')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj15')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj16')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj17')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj18')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj19')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj20')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj21')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj22')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj23')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj24')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj25')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj26')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj27')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj28')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj29')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj30')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj31')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj32')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj33')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj34')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj35')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj36')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj37')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj38')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj39')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            ChoiceField::new('rodzaj40')
                ->setChoices([
                    'Kpl' => 'kpl',
                    'Solo' => 'solo',
                    'Wazon' => 'wazon',
                    '2 wazony' => '2w',
                ], 'kpl')
                ->renderExpanded()
                ->setRequired(true)
                ->hideOnIndex(),

            BooleanField::new('fv')
                ->renderAsSwitch(true)
                ->hideOnIndex(),

            DateTimeField::new('fvWystawiono')
                ->setLabel('FV wystawiono')
                ->hideOnIndex(),

            TextareaField::new('uwagi')
                ->setLabel('Informacje/uwagi')
                ->hideOnIndex(),


        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // ...
            ->setPageTitle('new', 'Nowe przyszłe zamówienie - zeszyt')
            ->setPageTitle('index', 'Przyszłe zamówienia')
            ->setPageTitle('edit', 'Edycja zam. przyszłego')
            ->overrideTemplate('crud/new', 'admin/hurtoweZamowienia/new.html.twig')
            ->overrideTemplate('crud/edit', 'admin/hurtoweZamowienia/edit.html.twig')
            ->setEntityLabelInPlural('Zamówienia przyszłe')
            ->setEntityLabelInSingular('zamówienie przyszłe')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ->setDefaultSort([
                'id' => 'DESC'
            ]);
    }


    public function configureResponseParameters(KeyValueStore $responseParameters): KeyValueStore
    {
        //dosłanie dodatowej zmiennej - numery wózków

        //tylko na stronie edycji
        if ($responseParameters->get('templateName') === 'crud/edit') {

            // pobieram entityId
            $request = $this->requestStack->getCurrentRequest();
            $entityId = $request->query->get('entityId');


            $zamowienie = $this->entityManager->getRepository(HurtoweZamowienia::class)->find($entityId);
            //dd($kompozycja);

            $queryBuilder = $this->entityManager->createQueryBuilder();
            $queryBuilder->select('h')
                ->from(HurtoweZamowienia::class, 'h')
                ->where('h.id = :id')
                ->setParameter('id', $entityId)
                ->orderBy('h.id', 'ASC');

            $hurtoweEntity = $queryBuilder->getQuery()->getResult();


            $wozki = [];
            for ($i = 1; $i <= 40; $i++) {
                if ($nr = $hurtoweEntity[0]->{"getWozek" . $i}()) {

                    $wozki[] = $nr;
                }
            }

            //wyczyscmy cache dla krokow w FV
            $cache = new FilesystemAdapter();
            $cache->delete($entityId);

        }
        if (isset($wozki)) {
            // Get distinct elements from the array
            $wozki = array_unique($wozki);

            // Sort the array in ascending order
            sort($wozki);
            $responseParameters->set('numeryWozkow', $wozki);
            $responseParameters->set('suma', $hurtoweEntity[0]->getSuma());
            $responseParameters->set('klient', $hurtoweEntity[0]->getNazwa());
            return $responseParameters;
        } else {
            //zwróć  cokolwiek
            $responseParameters->set('test', 'test');
            return $responseParameters;
        }

    }



        //link z id
    public function configureActions(Actions $actions): Actions
    {
        $security = $this->security; // Zapisujemy referencję do serwisu Security

        $fvAction = Action::new('viewFV', 'FV', 'fa fa-money')
            ->linkToRoute('fv_krok_1', function ($hurtowe) {
                return ['id' => $hurtowe->getId()];
            })
            ->setIcon('fa fa-money')
            ->setLabel('FV')
            ->displayIf(static function ($hurtowe) use ($security) {
                return $hurtowe->isFv() == true && ($security->getUser()->getUserIdentifier() == 'malwina.kordiaka@gmail.com' || $security->getUser()->getUserIdentifier() == 'admin@admin.pl'); });

        return $actions->add(Crud::PAGE_INDEX, $fvAction);
    }





}
