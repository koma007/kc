<?php

namespace App\Controller\Admin;

use App\Entity\Polprodukty;
use App\Entity\User;
use App\Entity\Wyceny;
use App\Entity\Zeszyt2;
use App\Repository\UserRepository;
use App\Repository\WycenyRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use Symfony\Bundle\SecurityBundle\Security;

class Zeszyt2CrudController extends AbstractCrudController
{
    private $pracownik;

    public function __construct(EntityManagerInterface $entityManager, WycenyRepository $wycenyRepository, UserRepository $userRepository, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->wycenyRepository = $wycenyRepository;
        $this->userRepository = $userRepository;
        $this->security = $security;
    }


    public static function getEntityFqcn(): string
    {
        return Zeszyt2::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
        DateTimeField::new('createdAt')
            ->setLabel('Utworzono:')
            ->setDisabled()
            ->hideOnForm()
            ->hideOnIndex(),

            AssociationField::new('kompozycja')
                ->autocomplete()
                ->setLabel('Kompozycja')
                ->setRequired(true)
                ->hideOnIndex(),

            DateTimeField::new('updatedAt')
                ->setLabel('Data wykonania:')
                ->setFormTypeOptions([
                    'data' => new \DateTimeImmutable(), // Ustaw domyślną wartość na aktualny czas
                ]),
        NumberField::new('ilosc')
            ->setLabel('Szt./godz.'),
        ];
    }

    public function createEntity(string $entityFqcn)
    {
        $user = $this->security->getUser();
        $this->pracownik = $this->entityManager->getRepository(User::class)->find($user->getId());

        $zeszyt = new Zeszyt2();
        $zeszyt->setPracownik($this->pracownik);
        $zeszyt->setCreatedAt(new \DateTimeImmutable());
        //dd($zeszyt);
        return $zeszyt;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setDefaultSort([
                'updatedAt' => 'DESC'
            ]);
    }
}
