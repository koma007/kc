<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
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


    public function configureActions(Actions $actions): Actions
    {

        //dodatkowa akcja
        $viewAction = function() {
            return Action::new('view')
                ->linkToUrl(function(User $user) {
                  return '?_switch_user='. $user->getEmail();
                })
                ->setIcon('fa fa-user')
                ->setLabel('Zaloguj jako');
        };

        return parent::configureActions($actions)
            ->add(Crud::PAGE_INDEX, $viewAction());
    }
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {

        $roles = ['ROLE_ADMIN', 'ROLE_KLIENT_DETAL', 'ROLE_KLIENT_FIRMA', 'ROLE_USER', 'ROLE_PRACOWNIK'];
        return [
            TextField::new('Name')
                ->setLabel('Imię /Firma')
                ->setRequired('true'),
            TextField::new('Email')
            ->setRequired('true'),
            BooleanField::new('isVerified')
                ->setLabel('Zweryfikowany')
                ->renderAsSwitch(true),
            ChoiceField::new('roles')
                ->setChoices(array_combine($roles, $roles))
                ->setLabel('Role')
                ->allowMultipleChoices()
                ->renderExpanded()
                ->onlyOnForms(),
            ImageField::new('avatar')
                ->setLabel('Zdjęcie')
                ->setBasePath('uploads/avatars')
                ->setUploadDir('public/uploads/avatars')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->hideOnIndex(),
            TextField::new('short_name')
                ->setLabel('Nazwa skrócona'),
            TextField::new('nip')
                ->setLabel('NIP'),
            TextField::new('street_and_number')
                ->setLabel('Ulica i nr')
                ->onlyOnForms(),
            TextField::new('postal_code')
                ->setLabel('Kod pocztowy')
                ->onlyOnForms(),
            TextField::new('city')
                ->setLabel('Miejscowość')
                ->onlyOnForms(),
            TextField::new('country_id')
                ->setLabel('Kraj')
                ->onlyOnForms(),
            TextField::new('phone')
                ->setLabel('Telefon')
                ->onlyOnForms(),
            TextField::new('bank_account_number')
                ->setLabel('Nr konta bankowego')
                ->onlyOnForms(),

        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // ...
            ->setPageTitle('index', 'Użytkownicy ')
            ->setPageTitle('edit', 'Użytkownik')
            ->setEntityLabelInSingular('Użytkownika')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ;
    }

}
