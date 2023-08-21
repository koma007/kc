<?php

namespace App\Controller\Admin\ArrangementPrice;

use App\Entity\ArrangementPrice;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArrangementPrice2Controller extends AbstractController
{
    #[Route('/kompozycje_cennik/price', name: 'app_arrangement_price')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $arrangement_prices = $doctrine->getRepository(ArrangementPrice::class)->findAll();

        if (!$arrangement_prices) {
            throw $this->createNotFoundException(
                'Brak produktów'
            );
        }

        return $this->render('admin/arrangement_price/arrangement_price.twig', [
            'arrangement_prices' => $arrangement_prices,
        ]);
    }
}
