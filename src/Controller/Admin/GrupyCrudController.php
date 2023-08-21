<?php

namespace App\Controller\Admin;

use App\Entity\Grupy;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GrupyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Grupy::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('nazwa'),
            BooleanField::new('aktywny')
                ->setLabel('Aktywna na stronie')
                ->renderAsSwitch(true),
        ];
    }

}
