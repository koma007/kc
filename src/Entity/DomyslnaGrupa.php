<?php

namespace App\Entity;

use App\Repository\DomyslnaGrupaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DomyslnaGrupaRepository::class)]
class DomyslnaGrupa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Grupy $domyslna_grupa = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomyslnaGrupa(): ?Grupy
    {
        return $this->domyslna_grupa;
    }

    public function setDomyslnaGrupa(?Grupy $domyslna_grupa): static
    {
        $this->domyslna_grupa = $domyslna_grupa;

        return $this;
    }
}
