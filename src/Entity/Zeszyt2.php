<?php

namespace App\Entity;

use App\Repository\Zeszyt2Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Zeszyt2Repository::class)]
class Zeszyt2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $pracownik = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column]
    private ?float $ilosc = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Wyceny $kompozycja = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPracownik(): ?User
    {
        return $this->pracownik;
    }

    public function setPracownik(User $pracownik): static
    {
        $this->pracownik = $pracownik;

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

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIlosc(): ?float
    {
        return $this->ilosc;
    }

    public function setIlosc(float $ilosc): static
    {
        $this->ilosc = $ilosc;

        return $this;
    }

    public function getKompozycja(): ?Wyceny
    {
        return $this->kompozycja;
    }

    public function setKompozycja(?Wyceny $kompozycja): static
    {
        $this->kompozycja = $kompozycja;

        return $this;
    }
}
