<?php

namespace App\Entity;

use App\Repository\DostawcyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DostawcyRepository::class)]
class Dostawcy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\OneToMany(mappedBy: 'dostawcy', targetEntity: Polprodukty::class)]
    private Collection $polprodukt;


    public function __construct()
    {
        $this->polprodukt = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): static
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * @return Collection<int, Polprodukty>
     */
    public function getPolprodukt(): Collection
    {
        return $this->polprodukt;
    }

    public function addPolprodukt(Polprodukty $polprodukt): static
    {
        if (!$this->polprodukt->contains($polprodukt)) {
            $this->polprodukt->add($polprodukt);
            $polprodukt->setDostawcy($this);
        }

        return $this;
    }

    public function removePolprodukt(Polprodukty $polprodukt): static
    {
        if ($this->polprodukt->removeElement($polprodukt)) {
            // set the owning side to null (unless already changed)
            if ($polprodukt->getDostawcy() === $this) {
                $polprodukt->setDostawcy(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nazwa;
    }

}
