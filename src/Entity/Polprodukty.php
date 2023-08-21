<?php

namespace App\Entity;

use App\Repository\PolproduktyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PolproduktyRepository::class)]
class Polprodukty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\Column]
    private ?float $cena = null;

    #[ORM\OneToOne(mappedBy: 'skladowa1', cascade: ['persist', 'remove'])]
    private ?Wyceny $wyceny = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getCena(): ?float
    {
        return $this->cena;
    }

    public function setCena(float $cena): self
    {
        $this->cena = $cena;

        return $this;
    }

    public function getWyceny(): ?Wyceny
    {
        return $this->wyceny;
    }

    public function setWyceny(?Wyceny $wyceny): static
    {
        // unset the owning side of the relation if necessary
        if ($wyceny === null && $this->wyceny !== null) {
            $this->wyceny->setSkladowa1(null);
        }

        // set the owning side of the relation if necessary
        if ($wyceny !== null && $wyceny->getSkladowa1() !== $this) {
            $wyceny->setSkladowa1($this);
        }

        $this->wyceny = $wyceny;

        return $this;
    }

    public function __toString(): string
    {
        return $this->nazwa;
    }
}
