<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Zeszyt;
use App\Repository\UserRepository;
use App\Repository\ZeszytRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use http\Env\Response;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class ZeszytCrudController extends AbstractCrudController
{

    private $entityManager;
    private $requestStack;
    private $pracownik;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack, UserRepository $userRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
        $this->userRepository = $userRepository;
        $this->security = $security;
    }


    public static function getEntityFqcn(): string
    {
        return Zeszyt::class;
    }


    public function configureFields(string $pageName): iterable
    {


        return [
            TextField::new('nazwa')
                ->setRequired(true)
                ->setLabel('Klient'),
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
            IntegerField::new('wozek1')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ])
                ->setFormTypeOptions([
                    'constraints' => [
                        new \Symfony\Component\Validator\Constraints\Range([
                            'min' => 1,
                            'max' => 10,
                            'notInRangeMessage' => 'Wprowadź wartość między 1 a 10.',
                        ]),
                    ],
                ]),

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
            IntegerField::new('wozek2')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek3')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek4')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek5')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek6')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek7')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek8')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek9')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek10')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek11')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek12')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek13')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek14')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),
            IntegerField::new('wozek15')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek16')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek16')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek17')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek18')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek19')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek20')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek21')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),


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
            IntegerField::new('wozek22')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek23')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek24')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek25')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek26')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek27')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek28')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek29')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek30')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek31')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek32')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek33')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek34')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek35')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek36')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek37')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek38')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek39')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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
            IntegerField::new('wozek40')
                ->hideOnIndex()
                ->setFormTypeOptions([
                    'attr' => [
                        'min' => 1,
                        'max' => 10,
                    ],
                ]),

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


        ];
    }

    public function createEntity(string $entityFqcn)
    {
        $user = $this->security->getUser();
        $this->pracownik = $this->entityManager->getRepository(User::class)->find($user->getId());

        $zeszyt = new Zeszyt();
        $zeszyt->setPracownik($this->pracownik);
        return $zeszyt;
    }


    public function configureCrud(Crud $crud): Crud
    {
        $pracownikId = 4;
        return $crud
            // ...
            ->setPageTitle('new', 'Zeszyt: miesiąc')
            ->setPageTitle('index', 'Zeszyt: zestawienie miesięcy')
            ->setPageTitle('edit', 'Edycja miesiąca')
            ->overrideTemplate('crud/new', 'admin/zeszyt/new.html.twig')
            ->overrideTemplate('crud/edit', 'admin/zeszyt/edit.html.twig')
            ->setEntityLabelInPlural('miesiące')
            ->setEntityLabelInSingular('miesiąc')
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


            $zamowienie = $this->entityManager->getRepository(Zeszyt::class)->find($entityId);
            //dd($kompozycja);

            $queryBuilder = $this->entityManager->createQueryBuilder();
            $queryBuilder->select('h')
                ->from(Zeszyt::class, 'h')
                ->where('h.id = :id')
                ->setParameter('id', $entityId)
                ->orderBy('h.id', 'ASC');

            $zeszytEntity = $queryBuilder->getQuery()->getResult();


            $wozki = [];
            for ($i = 1; $i <= 40; $i++) {
                if ($nr = $zeszytEntity[0]->{"getWozek" . $i}()) {

                    $wozki[] = $nr;
                }
            }

        }
        if (isset($wozki)) {
            // Get distinct elements from the array
            $wozki = array_unique($wozki);

            // Sort the array in ascending order
            sort($wozki);
            $responseParameters->set('numeryWozkow', $wozki);
            $responseParameters->set('klient', $zeszytEntity[0]->getNazwa());
            return $responseParameters;
        } else {
            //zwróć  cokolwiek
            $responseParameters->set('test', 'test');
            return $responseParameters;
        }

    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {

        $qb = $this->entityManager->getRepository(Zeszyt::class)->createQueryBuilder('z');

        // Dodajemy warunek dotyczący zalogowanego użytkownika
        $user = $this->security->getUser();
        $qb->andWhere('z.pracownik = :pracownik')
            ->setParameter('pracownik', $user->getId());

        return $qb;
        //return parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters); // TODO: Change the autogenerated stub
    }


}
