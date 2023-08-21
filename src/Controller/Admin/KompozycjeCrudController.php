<?php

namespace App\Controller\Admin;

use App\Entity\Kompozycje;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CurrencyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use SimpleThings\EntityAudit\AuditReader;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class KompozycjeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Kompozycje::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm(),
            TextField::new('nazwa'),
            IntegerField::new('cena')->setLabel('Cena kpl'),
            ImageField::new('zdjecie')
                ->setBasePath('uploads/kompozycje')
                ->setUploadDir('public/uploads/kompozycje')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]'),
            IntegerField::new('cena_solo'),
            ImageField::new('wazon')
                ->setBasePath('uploads/kompozycje')
                ->setUploadDir('public/uploads/kompozycje')
                ->setUploadedFileNamePattern('[slug]-[wazon]-[timestamp].[extension]'),
            IntegerField::new('cena_wazon'),

            AssociationField::new('grupa')
                ->autocomplete(),
            BooleanField::new('aktywny')
                ->renderAsSwitch(true),
            //AssociationField::new('grupa')->renderAsNativeWidget()
//                ->setFormTypeOption('attr', [
//                    'class' => 'autocomplete',
//                    'data-autocomplete-url' => $this->generateUrl('autocomplete_grupy'),
//                ])

        ];
    }

    /**
     * @Route("/autocomplete/grupy", name="autocomplete_grupy")
     */
    public function autocompleteGrupy(Request $request): JsonResponse
    {
        $term = $request->query->get('term');

        // Tutaj pobierz dane grupy pasujące do podanego terminu
        $grupy = $this->getDoctrine()->getRepository(Grupy::class)->findGrupyByTerm($term);

        $response = [];
        foreach ($grupy as $grupa) {
            $response[] = [
                'id' => $grupa->getId(),
                'text' => $grupa->getNazwa(),
            ];
        }

        return new JsonResponse($response);
    }
}
