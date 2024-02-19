<?php

namespace App\Controller\Admin;

use App\Entity\FvKody;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FvKodyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FvKody::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('new', 'Nowy kod na FV')
            ->setPageTitle('index', 'Kody na FV')
            ->setPageTitle('edit', 'Edycja kodów na FV')
            ->setEntityLabelInPlural('Kody na FV')
            ->setEntityLabelInSingular('nowy kod na FV')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ->setDefaultSort([
                'id' => 'DESC'
            ]);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('kod')
                ->setRequired(true),

//            TextField::new('dostawca')
//                ->setRequired(true),

            NumberField::new('cena')
                ->setRequired(true),

        ];
    }
}
