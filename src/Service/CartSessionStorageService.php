<?php

namespace App\Service;

use App\Entity\Zamowienie;
use App\Repository\ZamowienieRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartSessionStorageService
{
    /**
     * The request stack.
     *
     * @var RequestStack
     */
    private $requestStack;

    /**
     * The cart repository.
     *
     * @var OrderRepository
     */
    private $cartRepository;

    /**
     * @var string
     */
    const CART_KEY_NAME = 'cart_id';

    /**
     * CartSessionStorageService constructor.
     *
     * @param RequestStack $requestStack
     * @param OrderRepository $orderRepository
     */
    public function __construct(RequestStack $requestStack, ZamowienieRepository $orderRepository)
    {
        $this->requestStack = $requestStack;
        $this->cartRepository = $orderRepository;
    }

    /**
     * Gets the cart in session.
     *
     * @return Zamowienie|null
     */
    public function getCart(): ?Zamowienie
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'status' => Zamowienie::STATUS_CART
        ]);
    }

    /**
     * Sets the cart in session.
     *
     * @param Order $cart
     */
    public function setCart(Zamowienie $cart): void
    {
        $this->getSession()->set(self::CART_KEY_NAME, $cart->getId());
    }

    /**
     * Returns the cart id.
     *
     * @return int|null
     */
    private function getCartId(): ?int
    {
        return $this->getSession()->get(self::CART_KEY_NAME);
    }

    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
}