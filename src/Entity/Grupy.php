<?php

namespace App\Entity;

use App\Repository\GrupyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\Blameable;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Gedmo\Mapping\Annotation as Gedmo;

#[ORM\Entity(repositoryClass: GrupyRepository::class)]
class Grupy
{
    use BlameableEntity;
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\Column(length: 16, nullable: true)]
    private $code;

    #[ORM\Column(length: 128, unique: true, nullable: true)]
    #[Gedmo\Slug(fields: ['nazwa', 'code'])]
    private $slug;

    #[ORM\OneToMany(mappedBy: 'grupa', targetEntity: Wyceny::class)]
    private Collection $kompozycjes;

    #[ORM\Column(nullable: true)]
    private ?bool $aktywny = null;

    public function __construct()
    {
        $this->kompozycjes = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->nazwa;
    }

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

    /**
     * @return Collection<int, Wyceny>
     */
    public function getKompozycjes(): Collection
    {
        return $this->kompozycjes;
    }

    public function addKompozycje(Wyceny $kompozycje): self
    {
        if (!$this->kompozycjes->contains($kompozycje)) {
            $this->kompozycjes->add($kompozycje);
            $kompozycje->setGrupa($this);
        }

        return $this;
    }

    public function removeKompozycje(Wyceny $kompozycje): self
    {
        if ($this->kompozycjes->removeElement($kompozycje)) {
            // set the owning side to null (unless already changed)
            if ($kompozycje->getGrupa() === $this) {
                $kompozycje->setGrupa(null);
            }
        }

        return $this;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function isAktywny(): ?bool
    {
        return $this->aktywny;
    }

    public function setAktywny(?bool $aktywny): static
    {
        $this->aktywny = $aktywny;

        return $this;
    }

}
