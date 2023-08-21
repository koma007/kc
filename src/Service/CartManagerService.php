<?php

namespace App\Service;


use App\Entity\Zamowienie;
use App\Service\ZamowienieFactoryService;
use App\Service\CartSessionStorageService;
use Doctrine\ORM\EntityManagerInterface;

class CartManagerService
{
    /**
     * @var CartSessionStorageService
     */
    private $cartSessionStorage;

    /**
     * @var ZamowienieFactoryService
     */
    private $cartFactory;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        CartSessionStorageService $cartStorage,
        ZamowienieFactoryService $orderFactory,
        EntityManagerInterface $entityManager
    ) {
        $this->cartSessionStorage = $cartStorage;
        $this->cartFactory = $orderFactory;
        $this->entityManager = $entityManager;
    }

    /**
     * Gets the current cart.
     *
     * @return Zamowienie
     */
    public function getCurrentCart(): Zamowienie
    {
        $cart = $this->cartSessionStorage->getCart();

        if (!$cart) {
            $cart = $this->cartFactory->create();
        }

        return $cart;
    }

    /**
     * Persists the cart in database and session.
     *
     * @param Zamowienie $cart
     */
    public function save(Zamowienie $cart): void
    {

        // Persist in database
        $this->entityManager->persist($cart);
        $this->entityManager->flush();
        // Persist in session
        $this->cartSessionStorage->setCart($cart);
    }
}