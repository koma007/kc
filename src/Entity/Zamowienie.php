<?php

namespace App\Entity;

use App\Repository\ZamowienieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZamowienieRepository::class)]
class Zamowienie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'zamowienieRef', targetEntity: ZamowienieProdukt::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $produkty;

    #[ORM\Column(length: 255)]
    private ?string $status = self::STATUS_CART;

    /**
     * An order that is in progress, not placed yet.
     *
     * @var string
     */
    const STATUS_CART = 'cart';

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    public function __construct()
    {
        $this->produkty = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, ZamowienieProdukt>
     */
    public function getProdukty(): Collection
    {
        return $this->produkty;
    }

    public function addProdukty(ZamowienieProdukt $produkty): self
    {
        foreach ($this->getProdukty() as $existingItem) {

            // The item already exists, update the quantity
            if ($existingItem->equals($produkty)) {
                $existingItem->setQuantity(
                    $existingItem->getQuantity() + $produkty->getQuantity()
                );
                return $this;
            }
        }

        $this->produkty[] = $produkty;
        $produkty->setZamowienieRef($this);

        return $this;



        //-
        if (!$this->produkty->contains($produkty)) {
            $this->produkty->add($produkty);
            $produkty->setZamowienieRef($this);
        }

        return $this;
    }

    public function removeProdukty(ZamowienieProdukt $produkty): self
    {
        if ($this->produkty->removeElement($produkty)) {
            // set the owning side to null (unless already changed)
            if ($produkty->getZamowienieRef() === $this) {
                $produkty->setZamowienieRef(null);
            }
        }

        return $this;
    }

    /**
     * Removes all items from the order.
     *
     * @return $this
     */
    public function removeItems(): self
    {
        foreach ($this->getProdukty() as $item) {
            $this->removeProdukty($item);
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


    /**
     * Calculates the order total.
     *
     * @return float
     */
    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->getProdukty() as $item) {
            $total += $item->getTotal();
        }

        return $total;
    }

    public function __toString(){
        return $this->getId();
    }
}
