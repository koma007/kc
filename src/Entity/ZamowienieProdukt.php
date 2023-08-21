<?php

namespace App\Entity;

use App\Repository\ZamowienieProduktRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZamowienieProduktRepository::class)]
class ZamowienieProdukt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    public function __construct()
    {
        $this->rodzaj = 'kpl';
    }

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Wyceny $produkt = null;

    #[ORM\Column]
    #[Assert\NotBlank()]
    #[Assert\GreaterThanOrEqual(1)]
    private ?int $quantity = null;

    #[ORM\ManyToOne(inversedBy: 'produkty')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Zamowienie $zamowienieRef = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $rodzaj = null;

    #[ORM\ManyToOne]
    private ?User $userId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdukt(): ?Wyceny
    {
        return $this->produkt;
    }

    public function setProdukt(?Wyceny $produkt): self
    {
        $this->produkt = $produkt;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function getZamowienieRef(): ?Zamowienie
    {
        return $this->zamowienieRef;
    }

    public function setZamowienieRef(?Zamowienie $zamowienieRef): self
    {
        $this->zamowienieRef = $zamowienieRef;

        return $this;
    }


// Tests if the given item given corresponds to the same order item.
//
// @param OrderItem $item
//
// @return bool

    public function equals(ZamowienieProdukt $item): bool
    {

        return $this->getProdukt()->getId() === $item->getProdukt()->getId() && $this->getRodzaj() === $item->getRodzaj() ;
    }


//    Calculates the item total.
//
//    @return float|int

    public function getTotal(): float
    {
        return $this->getProdukt()->getCenaKpl() * $this->getQuantity();
    }

    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }

    public function setRodzaj(?string $rodzaj): static
    {
        $this->rodzaj = $rodzaj;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
