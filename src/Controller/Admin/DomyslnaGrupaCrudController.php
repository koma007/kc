<?php

namespace App\Controller\Admin;

use App\Entity\DomyslnaGrupa;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class DomyslnaGrupaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DomyslnaGrupa::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            AssociationField::new('domyslna_grupa')
                ->setLabel('Domyśla grupa wybrana w wycenach')
                ->autocomplete(),

        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // ...
            ->setPageTitle('index', 'Domyśla grupa wybrana w wycenach - uwaga - max 1 wpis! ')
            ->setPageTitle('edit', 'Domyślna grupa')
            ->setEntityLabelInSingular('domyślną grupę')
            ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, 'delete')
            ->remove(Crud::PAGE_DETAIL, 'delete');
    }


}
