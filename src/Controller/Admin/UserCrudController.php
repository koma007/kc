<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use PHPUnit\Util\Exception;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Security\Core\User\UserInterface;
use function PHPUnit\Framework\throwException;

class UserCrudController extends AbstractCrudController
{

    public function __construct(){

    }


    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {

        $roles = ['ROLE_ADMIN', 'ROLE_DETAL', 'ROLE_HURT', 'ROLE_USER', 'ROLE_PRACOWNIK'];
        return [
            TextField::new('Name')
                ->setLabel('Imię')
                ->setRequired('true'),
            TextField::new('Email')
            ->setRequired('true'),
            BooleanField::new('isVerified')
                ->renderAsSwitch(true),
            ChoiceField::new('roles')
                ->setChoices(array_combine($roles, $roles))
                ->allowMultipleChoices()
                ->renderExpanded()
                ->onlyOnForms(),
            ImageField::new('avatar')
                ->setBasePath('uploads/avatars')
                ->setUploadDir('public/uploads/avatars')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')

        ];
    }



}
