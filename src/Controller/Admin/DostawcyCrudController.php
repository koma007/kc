<?php

namespace App\Controller\Admin;

use App\Entity\Dostawcy;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DostawcyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dostawcy::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // ...
            ->setPageTitle('new', 'Nowy dostawca')
            ->setPageTitle('index', 'Lista dostawców')
            ->setPageTitle('edit', 'Edycja dostawcy')
            ->setEntityLabelInPlural('Dostawcy')
            ->setEntityLabelInSingular('nowego dostawcę')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ->setDefaultSort([
                'id' => 'DESC'
            ]);
    }
}
