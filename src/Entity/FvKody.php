<?php

namespace App\Entity;

use App\Repository\FvKodyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FvKodyRepository::class)]
class FvKody
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $kod = null;

    #[ORM\Column]
    private ?float $cena = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKod(): ?string
    {
        return $this->kod;
    }

    public function setKod(string $kod): static
    {
        $this->kod = $kod;

        return $this;
    }

    public function getCena(): ?float
    {
        return $this->cena;
    }

    public function setCena(float $cena): static
    {
        $this->cena = $cena;

        return $this;
    }
}
