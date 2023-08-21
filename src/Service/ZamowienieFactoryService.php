<?php

namespace App\Service;

use App\Entity\Wyceny;
use App\Entity\Zamowienie;
use App\Entity\ZamowienieProdukt;


/**
 * Class ZamowienieFactoryService
 * @package App\Service
 */
class ZamowienieFactoryService
{
    /**
     * Creates an order.
     *
     * @return Zamowienie
     */
    public function create(): Zamowienie
    {
        $order = new Zamowienie();
        $order
            ->setStatus(Zamowienie::STATUS_CART)
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable());

        return $order;
    }

    /**
     * Creates an item for a product.
     *
     * @param Wyceny $product
     *
     * @return ZamowienieProdukt
     */
    public function createItem(Wyceny $product): ZamowienieProdukt
    {
        $item = new ZamowienieProdukt();
        $item->setZamowienieRef($product);
        $item->setQuantity(1);

        return $item;
    }


}