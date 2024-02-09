<?php

namespace App\Controller\Admin;

use App\Entity\Polprodukty;
use App\Repository\PolproduktyRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PolproduktyCrudController extends AbstractCrudController
{
    private $polproduktyRepository;

    public function __construct(PolproduktyRepository $polproduktyRepository, EntityManagerInterface $entityManager)
    {
        $this->polproduktyRepository = $polproduktyRepository;
        $this->entityManager = $entityManager;
    }
    public static function getEntityFqcn(): string
    {
        return Polprodukty::class;
    }

    #[Route('/polprodukt/{id}', name: 'app_get_cena')]
    public function getCena(?int $id): JsonResponse
    {
        // Fetch the cena value based on the selected option
         $cena = $this->polproduktyRepository->findOneBy(['id' => $id])->getCena();
         $nazwa = $this->polproduktyRepository->findOneBy(['id' => $id])->getNazwa();


        // Return the cena value as a JSON response
        return new JsonResponse(['cena' => $cena, 'nazwa' => $nazwa]);
    }

    #[Route('/insert-polprodukt/{nazwa}/{cena}', name: 'app_insert_polprodukt')]
    public function insertPolprodukt(?string $nazwa, ?float $cena): JsonResponse
    {

        // Sprawdzanie, czy dana nazwa już występuje w bazie
        $existingPolprodukt = $this->polproduktyRepository->findOneBy(['nazwa' => $nazwa]);


        if ($existingPolprodukt) {
            return new JsonResponse(['message' => $existingPolprodukt->getNazwa().' już istnieje w Półproduktach. Jego cena: '. $existingPolprodukt->getCena()]);
        }

        $polprodukt = new Polprodukty();
        $polprodukt->setNazwa($nazwa);
        $polprodukt->setCena($cena);

        $this->entityManager->persist($polprodukt);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Polprodukt dodany']);
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('new', 'Nowy półprodukt')
            ->setPageTitle('index', 'Półprodukty')
            ->setPageTitle('edit', 'Edycja półproduktu')
            ->setEntityLabelInPlural('Półprodukty')
            ->setEntityLabelInSingular('nowy półprodukt')
            ->showEntityActionsInlined() //nie ukrywaj edycja i usuń
            ->setDefaultSort([
                'id' => 'DESC'
            ]);
    }
}
