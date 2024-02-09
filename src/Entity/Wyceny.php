<?php

namespace App\Entity;

use App\Repository\WycenyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Blameable\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: WycenyRepository::class)]
class Wyceny
{
    use TimestampableEntity;
    use BlameableEntity;


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'wyceny', cascade: [])]
    private ?Polprodukty $skladowa1 = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\ManyToOne(inversedBy: 'wyceny', cascade: [])]
    private ?Polprodukty $skladowa2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena1 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc1 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk1 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk2 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa3 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk3 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena3 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc3 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa4 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk4 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena4 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc4 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa5 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk5 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena5 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc5 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa6 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc7 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa8 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk8 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena8 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc8 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa8 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa9 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk9 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena9 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc9 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa9 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa10 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk10 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena10 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc10 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa10 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa11 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa11 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk11 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena11 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc11 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa12 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa12 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk12 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena12 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc12 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa13 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa13 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk13 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena13 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc13 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa14 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa14 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk14 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena14 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc14 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa15 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa15 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk15 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena15 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc15 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa16 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa16 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk16 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena16 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc16 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa17 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa17 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk17 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena17 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc17 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa18 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa18 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk18 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena18 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc18 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa19 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa19 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk19 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena19 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc19 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa20 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa20 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk20 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena20 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc20 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa21 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa21 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk21 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena21 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc21 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa22 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk22 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena22 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc22 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa23 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk23 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena23 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc23 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa24 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk24 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena24 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc24 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa25 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk25 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena25 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc25 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa26 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk26 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena26 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc26 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa27 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk27 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena27 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc27 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa28 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk28 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena28 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc28 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa29 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk29 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena29 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc29 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa29 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa30 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk30 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena30 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc30 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa30 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa31 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk31 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena31 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc31 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa31 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa32 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk32 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena32 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc32 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa32 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa33 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk33 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena33 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc33 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa33 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa34 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk34 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena34 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc34 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa34 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa35 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk35 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena35 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc35 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa35 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa36 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk36 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena36 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc36 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa36 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa37 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk37 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena37 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc37 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa37 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa38 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk38 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena38 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc38 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa38 = null;

    #[ORM\ManyToOne]
    private ?Polprodukty $skladowa39 = null;

    #[ORM\Column(nullable: true)]
    private ?float $sztuk39 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena39 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc39 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa39 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $marza_solo = null;

    #[ORM\Column(nullable: true)]
    private ?float $marza_wazon = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena_solo = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena_wazon = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena_kpl = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena_kpl_2w = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zdjecie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zdjecie_solo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $zdjecie_wazon = null;

    #[ORM\Column]
    private ?bool $aktywny = null;

    #[ORM\ManyToOne(inversedBy: 'kompozycjes')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Grupy $grupa = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkladowa1(): ?Polprodukty
    {
        return $this->skladowa1;
    }

    public function setSkladowa1(?Polprodukty $skladowa1): static
    {
        $this->skladowa1 = $skladowa1;

        return $this;
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

    public function getSkladowa2(): ?Polprodukty
    {
        return $this->skladowa2;
    }

    public function setSkladowa2(?Polprodukty $skladowa2): static
    {
        $this->skladowa2 = $skladowa2;

        return $this;
    }

    public function getCena1(): ?float
    {
        return $this->cena1;
    }

    public function setCena1(?float $cena1): static
    {
        $this->cena1 = $cena1;

        return $this;
    }

    public function getCena2(): ?float
    {
        return $this->cena2;
    }

    public function setCena2(?float $cena2): static
    {
        $this->cena2 = $cena2;

        return $this;
    }

    public function getWartosc1(): ?float
    {
        return $this->wartosc1;
    }

    public function setWartosc1(?float $wartosc1): static
    {
        $this->wartosc1 = $wartosc1;

        return $this;
    }

    public function getWartosc2(): ?float
    {
        return $this->wartosc2;
    }

    public function setWartosc2(?float $wartosc2): static
    {
        $this->wartosc2 = $wartosc2;

        return $this;
    }

    public function getSztuk1(): ?float
    {
        return $this->sztuk1;
    }

    public function setSztuk1(?float $sztuk1): static
    {
        $this->sztuk1 = $sztuk1;

        return $this;
    }

    public function getSztuk2(): ?float
    {
        return $this->sztuk2;
    }

    public function setSztuk2(?float $sztuk2): static
    {
        $this->sztuk2 = $sztuk2;

        return $this;
    }

    public function getSkladowa3(): ?Polprodukty
    {
        return $this->skladowa3;
    }

    public function setSkladowa3(?Polprodukty $skladowa3): static
    {
        $this->skladowa3 = $skladowa3;

        return $this;
    }

    public function getSztuk3(): ?float
    {
        return $this->sztuk3;
    }

    public function setSztuk3(?float $sztuk3): static
    {
        $this->sztuk3 = $sztuk3;

        return $this;
    }

    public function getCena3(): ?float
    {
        return $this->cena3;
    }

    public function setCena3(?float $cena3): static
    {
        $this->cena3 = $cena3;

        return $this;
    }

    public function getWartosc3(): ?float
    {
        return $this->wartosc3;
    }

    public function setWartosc3(?float $wartosc3): static
    {
        $this->wartosc3 = $wartosc3;

        return $this;
    }

    public function getSkladowa4(): ?Polprodukty
    {
        return $this->skladowa4;
    }

    public function setSkladowa4(?Polprodukty $skladowa4): static
    {
        $this->skladowa4 = $skladowa4;

        return $this;
    }

    public function getSztuk4(): ?float
    {
        return $this->sztuk4;
    }

    public function setSztuk4(?float $sztuk4): static
    {
        $this->sztuk4 = $sztuk4;

        return $this;
    }

    public function getCena4(): ?float
    {
        return $this->cena4;
    }

    public function setCena4(?float $cena4): static
    {
        $this->cena4 = $cena4;

        return $this;
    }

    public function getWartosc4(): ?float
    {
        return $this->wartosc4;
    }

    public function setWartosc4(?float $wartosc4): static
    {
        $this->wartosc4 = $wartosc4;

        return $this;
    }

    public function getSkladowa5(): ?Polprodukty
    {
        return $this->skladowa5;
    }

    public function setSkladowa5(?Polprodukty $skladowa5): static
    {
        $this->skladowa5 = $skladowa5;

        return $this;
    }

    public function getSztuk5(): ?float
    {
        return $this->sztuk5;
    }

    public function setSztuk5(?float $sztuk5): static
    {
        $this->sztuk5 = $sztuk5;

        return $this;
    }

    public function getCena5(): ?float
    {
        return $this->cena5;
    }

    public function setCena5(?float $cena5): static
    {
        $this->cena5 = $cena5;

        return $this;
    }

    public function getWartosc5(): ?float
    {
        return $this->wartosc5;
    }

    public function setWartosc5(?float $wartosc5): static
    {
        $this->wartosc5 = $wartosc5;

        return $this;
    }

    public function getSkladowa6(): ?Polprodukty
    {
        return $this->skladowa6;
    }

    public function setSkladowa6(?Polprodukty $skladowa6): static
    {
        $this->skladowa6 = $skladowa6;

        return $this;
    }

    public function getSkladowa7(): ?Polprodukty
    {
        return $this->skladowa7;
    }

    public function setSkladowa7(?Polprodukty $skladowa7): static
    {
        $this->skladowa7 = $skladowa7;

        return $this;
    }

    public function getSztuk6(): ?float
    {
        return $this->sztuk6;
    }

    public function setSztuk6(?float $sztuk6): static
    {
        $this->sztuk6 = $sztuk6;

        return $this;
    }

    public function getSztuk7(): ?float
    {
        return $this->sztuk7;
    }

    public function setSztuk7(?float $sztuk7): static
    {
        $this->sztuk7 = $sztuk7;

        return $this;
    }

    public function getCena6(): ?float
    {
        return $this->cena6;
    }

    public function setCena6(?float $cena6): static
    {
        $this->cena6 = $cena6;

        return $this;
    }

    public function getCena7(): ?float
    {
        return $this->cena7;
    }

    public function setCena7(?float $cena7): static
    {
        $this->cena7 = $cena7;

        return $this;
    }

    public function getWartosc6(): ?float
    {
        return $this->wartosc6;
    }

    public function setWartosc6(?float $wartosc6): static
    {
        $this->wartosc6 = $wartosc6;

        return $this;
    }

    public function getWartosc7(): ?float
    {
        return $this->wartosc7;
    }

    public function setWartosc7(?float $wartosc7): static
    {
        $this->wartosc7 = $wartosc7;

        return $this;
    }

    public function getSkladowa8(): ?Polprodukty
    {
        return $this->skladowa8;
    }

    public function setSkladowa8(?Polprodukty $skladowa8): static
    {
        $this->skladowa8 = $skladowa8;

        return $this;
    }

    public function getSztuk8(): ?float
    {
        return $this->sztuk8;
    }

    public function setSztuk8(?float $sztuk8): static
    {
        $this->sztuk8 = $sztuk8;

        return $this;
    }

    public function getCena8(): ?float
    {
        return $this->cena8;
    }

    public function setCena8(?float $cena8): static
    {
        $this->cena8 = $cena8;

        return $this;
    }

    public function getWartosc8(): ?float
    {
        return $this->wartosc8;
    }

    public function setWartosc8(?float $wartosc8): static
    {
        $this->wartosc8 = $wartosc8;

        return $this;
    }

    public function getNazwa8(): ?string
    {
        return $this->nazwa8;
    }

    public function setNazwa8(?string $nazwa8): static
    {
        $this->nazwa8 = $nazwa8;

        return $this;
    }

    public function getSkladowa9(): ?Polprodukty
    {
        return $this->skladowa9;
    }

    public function setSkladowa9(?Polprodukty $skladowa9): static
    {
        $this->skladowa9 = $skladowa9;

        return $this;
    }

    public function getSztuk9(): ?float
    {
        return $this->sztuk9;
    }

    public function setSztuk9(?float $sztuk9): static
    {
        $this->sztuk9 = $sztuk9;

        return $this;
    }

    public function getCena9(): ?float
    {
        return $this->cena9;
    }

    public function setCena9(?float $cena9): static
    {
        $this->cena9 = $cena9;

        return $this;
    }

    public function getWartosc9(): ?float
    {
        return $this->wartosc9;
    }

    public function setWartosc9(?float $wartosc9): static
    {
        $this->wartosc9 = $wartosc9;

        return $this;
    }

    public function getNazwa9(): ?string
    {
        return $this->nazwa9;
    }

    public function setNazwa9(?string $nazwa9): static
    {
        $this->nazwa9 = $nazwa9;

        return $this;
    }

    public function getSkladowa10(): ?Polprodukty
    {
        return $this->skladowa10;
    }

    public function setSkladowa10(?Polprodukty $skladowa10): static
    {
        $this->skladowa10 = $skladowa10;

        return $this;
    }

    public function getSztuk10(): ?float
    {
        return $this->sztuk10;
    }

    public function setSztuk10(?float $sztuk10): static
    {
        $this->sztuk10 = $sztuk10;

        return $this;
    }

    public function getCena10(): ?float
    {
        return $this->cena10;
    }

    public function setCena10(?float $cena10): static
    {
        $this->cena10 = $cena10;

        return $this;
    }

    public function getWartosc10(): ?float
    {
        return $this->wartosc10;
    }

    public function setWartosc10(?float $wartosc10): static
    {
        $this->wartosc10 = $wartosc10;

        return $this;
    }

    public function getNazwa10(): ?string
    {
        return $this->nazwa10;
    }

    public function setNazwa10(?string $nazwa10): static
    {
        $this->nazwa10 = $nazwa10;

        return $this;
    }

    public function getSkladowa11(): ?Polprodukty
    {
        return $this->skladowa11;
    }

    public function setSkladowa11(?Polprodukty $skladowa11): static
    {
        $this->skladowa11 = $skladowa11;

        return $this;
    }

    public function getNazwa11(): ?string
    {
        return $this->nazwa11;
    }

    public function setNazwa11(?string $nazwa11): static
    {
        $this->nazwa11 = $nazwa11;

        return $this;
    }

    public function getSztuk11(): ?float
    {
        return $this->sztuk11;
    }

    public function setSztuk11(?float $sztuk11): static
    {
        $this->sztuk11 = $sztuk11;

        return $this;
    }

    public function getCena11(): ?float
    {
        return $this->cena11;
    }

    public function setCena11(?float $cena11): static
    {
        $this->cena11 = $cena11;

        return $this;
    }

    public function getWartosc11(): ?float
    {
        return $this->wartosc11;
    }

    public function setWartosc11(?float $wartosc11): static
    {
        $this->wartosc11 = $wartosc11;

        return $this;
    }

    public function getSkladowa12(): ?Polprodukty
    {
        return $this->skladowa12;
    }

    public function setSkladowa12(?Polprodukty $skladowa12): static
    {
        $this->skladowa12 = $skladowa12;

        return $this;
    }

    public function getNazwa12(): ?string
    {
        return $this->nazwa12;
    }

    public function setNazwa12(?string $nazwa12): static
    {
        $this->nazwa12 = $nazwa12;

        return $this;
    }

    public function getSztuk12(): ?float
    {
        return $this->sztuk12;
    }

    public function setSztuk12(?float $sztuk12): static
    {
        $this->sztuk12 = $sztuk12;

        return $this;
    }

    public function getCena12(): ?float
    {
        return $this->cena12;
    }

    public function setCena12(?float $cena12): static
    {
        $this->cena12 = $cena12;

        return $this;
    }

    public function getWartosc12(): ?float
    {
        return $this->wartosc12;
    }

    public function setWartosc12(?float $wartosc12): static
    {
        $this->wartosc12 = $wartosc12;

        return $this;
    }

    public function getSkladowa13(): ?Polprodukty
    {
        return $this->skladowa13;
    }

    public function setSkladowa13(?Polprodukty $skladowa13): static
    {
        $this->skladowa13 = $skladowa13;

        return $this;
    }

    public function getNazwa13(): ?string
    {
        return $this->nazwa13;
    }

    public function setNazwa13(?string $nazwa13): static
    {
        $this->nazwa13 = $nazwa13;

        return $this;
    }

    public function getSztuk13(): ?float
    {
        return $this->sztuk13;
    }

    public function setSztuk13(?float $sztuk13): static
    {
        $this->sztuk13 = $sztuk13;

        return $this;
    }

    public function getCena13(): ?float
    {
        return $this->cena13;
    }

    public function setCena13(?float $cena13): static
    {
        $this->cena13 = $cena13;

        return $this;
    }

    public function getWartosc13(): ?float
    {
        return $this->wartosc13;
    }

    public function setWartosc13(?float $wartosc13): static
    {
        $this->wartosc13 = $wartosc13;

        return $this;
    }

    public function getSkladowa14(): ?Polprodukty
    {
        return $this->skladowa14;
    }

    public function setSkladowa14(?Polprodukty $skladowa14): static
    {
        $this->skladowa14 = $skladowa14;

        return $this;
    }

    public function getNazwa14(): ?string
    {
        return $this->nazwa14;
    }

    public function setNazwa14(?string $nazwa14): static
    {
        $this->nazwa14 = $nazwa14;

        return $this;
    }

    public function getSztuk14(): ?float
    {
        return $this->sztuk14;
    }

    public function setSztuk14(?float $sztuk14): static
    {
        $this->sztuk14 = $sztuk14;

        return $this;
    }

    public function getCena14(): ?float
    {
        return $this->cena14;
    }

    public function setCena14(?float $cena14): static
    {
        $this->cena14 = $cena14;

        return $this;
    }

    public function getWartosc14(): ?float
    {
        return $this->wartosc14;
    }

    public function setWartosc14(?float $wartosc14): static
    {
        $this->wartosc14 = $wartosc14;

        return $this;
    }

    public function getSkladowa15(): ?Polprodukty
    {
        return $this->skladowa15;
    }

    public function setSkladowa15(?Polprodukty $skladowa15): static
    {
        $this->skladowa15 = $skladowa15;

        return $this;
    }

    public function getNazwa15(): ?string
    {
        return $this->nazwa15;
    }

    public function setNazwa15(?string $nazwa15): static
    {
        $this->nazwa15 = $nazwa15;

        return $this;
    }

    public function getSztuk15(): ?float
    {
        return $this->sztuk15;
    }

    public function setSztuk15(?float $sztuk15): static
    {
        $this->sztuk15 = $sztuk15;

        return $this;
    }

    public function getCena15(): ?float
    {
        return $this->cena15;
    }

    public function setCena15(?float $cena15): static
    {
        $this->cena15 = $cena15;

        return $this;
    }

    public function getWartosc15(): ?float
    {
        return $this->wartosc15;
    }

    public function setWartosc15(?float $wartosc15): static
    {
        $this->wartosc15 = $wartosc15;

        return $this;
    }

    public function getSkladowa16(): ?Polprodukty
    {
        return $this->skladowa16;
    }

    public function setSkladowa16(?Polprodukty $skladowa16): static
    {
        $this->skladowa16 = $skladowa16;

        return $this;
    }

    public function getNazwa16(): ?string
    {
        return $this->nazwa16;
    }

    public function setNazwa16(?string $nazwa16): static
    {
        $this->nazwa16 = $nazwa16;

        return $this;
    }

    public function getSztuk16(): ?float
    {
        return $this->sztuk16;
    }

    public function setSztuk16(?float $sztuk16): static
    {
        $this->sztuk16 = $sztuk16;

        return $this;
    }

    public function getCena16(): ?float
    {
        return $this->cena16;
    }

    public function setCena16(?float $cena16): static
    {
        $this->cena16 = $cena16;

        return $this;
    }

    public function getWartosc16(): ?float
    {
        return $this->wartosc16;
    }

    public function setWartosc16(?float $wartosc16): static
    {
        $this->wartosc16 = $wartosc16;

        return $this;
    }

    public function getSkladowa17(): ?Polprodukty
    {
        return $this->skladowa17;
    }

    public function setSkladowa17(?Polprodukty $skladowa17): static
    {
        $this->skladowa17 = $skladowa17;

        return $this;
    }

    public function getNazwa17(): ?string
    {
        return $this->nazwa17;
    }

    public function setNazwa17(?string $nazwa17): static
    {
        $this->nazwa17 = $nazwa17;

        return $this;
    }

    public function getSztuk17(): ?float
    {
        return $this->sztuk17;
    }

    public function setSztuk17(?float $sztuk17): static
    {
        $this->sztuk17 = $sztuk17;

        return $this;
    }

    public function getCena17(): ?float
    {
        return $this->cena17;
    }

    public function setCena17(?float $cena17): static
    {
        $this->cena17 = $cena17;

        return $this;
    }

    public function getWartosc17(): ?float
    {
        return $this->wartosc17;
    }

    public function setWartosc17(?float $wartosc17): static
    {
        $this->wartosc17 = $wartosc17;

        return $this;
    }

    public function getSkladowa18(): ?Polprodukty
    {
        return $this->skladowa18;
    }

    public function setSkladowa18(?Polprodukty $skladowa18): static
    {
        $this->skladowa18 = $skladowa18;

        return $this;
    }

    public function getNazwa18(): ?string
    {
        return $this->nazwa18;
    }

    public function setNazwa18(?string $nazwa18): static
    {
        $this->nazwa18 = $nazwa18;

        return $this;
    }

    public function getSztuk18(): ?float
    {
        return $this->sztuk18;
    }

    public function setSztuk18(?float $sztuk18): static
    {
        $this->sztuk18 = $sztuk18;

        return $this;
    }

    public function getCena18(): ?float
    {
        return $this->cena18;
    }

    public function setCena18(?float $cena18): static
    {
        $this->cena18 = $cena18;

        return $this;
    }

    public function getWartosc18(): ?float
    {
        return $this->wartosc18;
    }

    public function setWartosc18(?float $wartosc18): static
    {
        $this->wartosc18 = $wartosc18;

        return $this;
    }

    public function getSkladowa19(): ?Polprodukty
    {
        return $this->skladowa19;
    }

    public function setSkladowa19(?Polprodukty $skladowa19): static
    {
        $this->skladowa19 = $skladowa19;

        return $this;
    }

    public function getNazwa19(): ?string
    {
        return $this->nazwa19;
    }

    public function setNazwa19(?string $nazwa19): static
    {
        $this->nazwa19 = $nazwa19;

        return $this;
    }

    public function getSztuk19(): ?float
    {
        return $this->sztuk19;
    }

    public function setSztuk19(?float $sztuk19): static
    {
        $this->sztuk19 = $sztuk19;

        return $this;
    }

    public function getCena19(): ?float
    {
        return $this->cena19;
    }

    public function setCena19(?float $cena19): static
    {
        $this->cena19 = $cena19;

        return $this;
    }

    public function getWartosc19(): ?float
    {
        return $this->wartosc19;
    }

    public function setWartosc19(?float $wartosc19): static
    {
        $this->wartosc19 = $wartosc19;

        return $this;
    }

    public function getSkladowa20(): ?Polprodukty
    {
        return $this->skladowa20;
    }

    public function setSkladowa20(?Polprodukty $skladowa20): static
    {
        $this->skladowa20 = $skladowa20;

        return $this;
    }

    public function getNazwa20(): ?string
    {
        return $this->nazwa20;
    }

    public function setNazwa20(?string $nazwa20): static
    {
        $this->nazwa20 = $nazwa20;

        return $this;
    }

    public function getSztuk20(): ?float
    {
        return $this->sztuk20;
    }

    public function setSztuk20(?float $sztuk20): static
    {
        $this->sztuk20 = $sztuk20;

        return $this;
    }

    public function getCena20(): ?float
    {
        return $this->cena20;
    }

    public function setCena20(?float $cena20): static
    {
        $this->cena20 = $cena20;

        return $this;
    }

    public function getWartosc20(): ?float
    {
        return $this->wartosc20;
    }

    public function setWartosc20(?float $wartosc20): static
    {
        $this->wartosc20 = $wartosc20;

        return $this;
    }

    public function getSkladowa21(): ?Polprodukty
    {
        return $this->skladowa21;
    }

    public function setSkladowa21(?Polprodukty $skladowa21): static
    {
        $this->skladowa21 = $skladowa21;

        return $this;
    }

    public function getNazwa21(): ?string
    {
        return $this->nazwa21;
    }

    public function setNazwa21(?string $nazwa21): static
    {
        $this->nazwa21 = $nazwa21;

        return $this;
    }

    public function getSztuk21(): ?float
    {
        return $this->sztuk21;
    }

    public function setSztuk21(?float $sztuk21): static
    {
        $this->sztuk21 = $sztuk21;

        return $this;
    }

    public function getCena21(): ?float
    {
        return $this->cena21;
    }

    public function setCena21(?float $cena21): static
    {
        $this->cena21 = $cena21;

        return $this;
    }

    public function getWartosc21(): ?float
    {
        return $this->wartosc21;
    }

    public function setWartosc21(?float $wartosc21): static
    {
        $this->wartosc21 = $wartosc21;

        return $this;
    }

    public function getNazwa7(): ?string
    {
        return $this->nazwa7;
    }

    public function setNazwa7(?string $nazwa7): static
    {
        $this->nazwa7 = $nazwa7;

        return $this;
    }

    public function getSkladowa22(): ?Polprodukty
    {
        return $this->skladowa22;
    }

    public function setSkladowa22(?Polprodukty $skladowa22): static
    {
        $this->skladowa22 = $skladowa22;

        return $this;
    }

    public function getSztuk22(): ?float
    {
        return $this->sztuk22;
    }

    public function setSztuk22(?float $sztuk22): static
    {
        $this->sztuk22 = $sztuk22;

        return $this;
    }

    public function getCena22(): ?float
    {
        return $this->cena22;
    }

    public function setCena22(?float $cena22): static
    {
        $this->cena22 = $cena22;

        return $this;
    }

    public function getWartosc22(): ?float
    {
        return $this->wartosc22;
    }

    public function setWartosc22(?float $wartosc22): static
    {
        $this->wartosc22 = $wartosc22;

        return $this;
    }


    public function getSkladowa23(): ?Polprodukty
    {
        return $this->skladowa23;
    }

    public function setSkladowa23(?Polprodukty $skladowa23): static
    {
        $this->skladowa23 = $skladowa23;

        return $this;
    }

    public function getSztuk23(): ?float
    {
        return $this->sztuk23;
    }

    public function setSztuk23(?float $sztuk23): static
    {
        $this->sztuk23 = $sztuk23;

        return $this;
    }

    public function getCena23(): ?float
    {
        return $this->cena23;
    }

    public function setCena23(?float $cena23): static
    {
        $this->cena23 = $cena23;

        return $this;
    }

    public function getWartosc23(): ?float
    {
        return $this->wartosc23;
    }

    public function setWartosc23(?float $wartosc23): static
    {
        $this->wartosc23 = $wartosc23;

        return $this;
    }

    public function getSkladowa24(): ?Polprodukty
    {
        return $this->skladowa24;
    }

    public function setSkladowa24(?Polprodukty $skladowa24): static
    {
        $this->skladowa24 = $skladowa24;

        return $this;
    }

    public function getSztuk24(): ?float
    {
        return $this->sztuk24;
    }

    public function setSztuk24(?float $sztuk24): static
    {
        $this->sztuk24 = $sztuk24;

        return $this;
    }

    public function getCena24(): ?float
    {
        return $this->cena24;
    }

    public function setCena24(?float $cena24): static
    {
        $this->cena24 = $cena24;

        return $this;
    }

    public function getWartosc24(): ?float
    {
        return $this->wartosc24;
    }

    public function setWartosc24(?float $wartosc24): static
    {
        $this->wartosc24 = $wartosc24;

        return $this;
    }


    public function getSkladowa25(): ?Polprodukty
    {
        return $this->skladowa25;
    }

    public function setSkladowa25(?Polprodukty $skladowa25): static
    {
        $this->skladowa25 = $skladowa25;

        return $this;
    }

    public function getSztuk25(): ?float
    {
        return $this->sztuk25;
    }

    public function setSztuk25(?float $sztuk25): static
    {
        $this->sztuk25 = $sztuk25;

        return $this;
    }

    public function getCena25(): ?float
    {
        return $this->cena25;
    }

    public function setCena25(?float $cena25): static
    {
        $this->cena25 = $cena25;

        return $this;
    }

    public function getWartosc25(): ?float
    {
        return $this->wartosc25;
    }

    public function setWartosc25(?float $wartosc25): static
    {
        $this->wartosc25 = $wartosc25;

        return $this;
    }

    public function getSkladowa26(): ?Polprodukty
    {
        return $this->skladowa26;
    }

    public function setSkladowa26(?Polprodukty $skladowa26): static
    {
        $this->skladowa26 = $skladowa26;

        return $this;
    }

    public function getSztuk26(): ?float
    {
        return $this->sztuk26;
    }

    public function setSztuk26(?float $sztuk26): static
    {
        $this->sztuk26 = $sztuk26;

        return $this;
    }

    public function getCena26(): ?float
    {
        return $this->cena26;
    }

    public function setCena26(?float $cena26): static
    {
        $this->cena26 = $cena26;

        return $this;
    }

    public function getWartosc26(): ?float
    {
        return $this->wartosc26;
    }

    public function setWartosc26(?float $wartosc26): static
    {
        $this->wartosc26 = $wartosc26;

        return $this;
    }


    public function getSkladowa27(): ?Polprodukty
    {
        return $this->skladowa27;
    }

    public function setSkladowa27(?Polprodukty $skladowa27): static
    {
        $this->skladowa27 = $skladowa27;

        return $this;
    }

    public function getSztuk27(): ?float
    {
        return $this->sztuk27;
    }

    public function setSztuk27(?float $sztuk27): static
    {
        $this->sztuk27 = $sztuk27;

        return $this;
    }

    public function getCena27(): ?float
    {
        return $this->cena27;
    }

    public function setCena27(?float $cena27): static
    {
        $this->cena27 = $cena27;

        return $this;
    }

    public function getWartosc27(): ?float
    {
        return $this->wartosc27;
    }

    public function setWartosc27(?float $wartosc27): static
    {
        $this->wartosc27 = $wartosc27;

        return $this;
    }

    public function getSkladowa28(): ?Polprodukty
    {
        return $this->skladowa28;
    }

    public function setSkladowa28(?Polprodukty $skladowa28): static
    {
        $this->skladowa28 = $skladowa28;

        return $this;
    }

    public function getSztuk28(): ?float
    {
        return $this->sztuk28;
    }

    public function setSztuk28(?float $sztuk28): static
    {
        $this->sztuk28 = $sztuk28;

        return $this;
    }

    public function getCena28(): ?float
    {
        return $this->cena28;
    }

    public function setCena28(?float $cena28): static
    {
        $this->cena28 = $cena28;

        return $this;
    }

    public function getWartosc28(): ?float
    {
        return $this->wartosc28;
    }

    public function setWartosc28(?float $wartosc28): static
    {
        $this->wartosc28 = $wartosc28;

        return $this;
    }

    public function getSkladowa29(): ?Polprodukty
    {
        return $this->skladowa29;
    }

    public function setSkladowa29(?Polprodukty $skladowa29): static
    {
        $this->skladowa29 = $skladowa29;

        return $this;
    }

    public function getSztuk29(): ?float
    {
        return $this->sztuk29;
    }

    public function setSztuk29(?float $sztuk29): static
    {
        $this->sztuk29 = $sztuk29;

        return $this;
    }

    public function getCena29(): ?float
    {
        return $this->cena29;
    }

    public function setCena29(?float $cena29): static
    {
        $this->cena29 = $cena29;

        return $this;
    }

    public function getWartosc29(): ?float
    {
        return $this->wartosc29;
    }

    public function setWartosc29(?float $wartosc29): static
    {
        $this->wartosc29 = $wartosc29;

        return $this;
    }

    public function getNazwa29(): ?string
    {
        return $this->nazwa29;
    }

    public function setNazwa29(?string $nazwa29): static
    {
        $this->nazwa29 = $nazwa29;

        return $this;
    }

    public function getSkladowa30(): ?Polprodukty
    {
        return $this->skladowa30;
    }

    public function setSkladowa30(?Polprodukty $skladowa30): static
    {
        $this->skladowa30 = $skladowa30;

        return $this;
    }

    public function getSztuk30(): ?float
    {
        return $this->sztuk30;
    }

    public function setSztuk30(?float $sztuk30): static
    {
        $this->sztuk30 = $sztuk30;

        return $this;
    }

    public function getCena30(): ?float
    {
        return $this->cena30;
    }

    public function setCena30(?float $cena30): static
    {
        $this->cena30 = $cena30;

        return $this;
    }

    public function getWartosc30(): ?float
    {
        return $this->wartosc30;
    }

    public function setWartosc30(?float $wartosc30): static
    {
        $this->wartosc30 = $wartosc30;

        return $this;
    }

    public function getNazwa30(): ?string
    {
        return $this->nazwa30;
    }

    public function setNazwa30(?string $nazwa30): static
    {
        $this->nazwa30 = $nazwa30;

        return $this;
    }

    public function getSkladowa31(): ?Polprodukty
    {
        return $this->skladowa31;
    }

    public function setSkladowa31(?Polprodukty $skladowa31): static
    {
        $this->skladowa31 = $skladowa31;

        return $this;
    }

    public function getSztuk31(): ?float
    {
        return $this->sztuk31;
    }

    public function setSztuk31(?float $sztuk31): static
    {
        $this->sztuk31 = $sztuk31;

        return $this;
    }

    public function getCena31(): ?float
    {
        return $this->cena31;
    }

    public function setCena31(?float $cena31): static
    {
        $this->cena31 = $cena31;

        return $this;
    }

    public function getWartosc31(): ?float
    {
        return $this->wartosc31;
    }

    public function setWartosc31(?float $wartosc31): static
    {
        $this->wartosc31 = $wartosc31;

        return $this;
    }

    public function getNazwa31(): ?string
    {
        return $this->nazwa31;
    }

    public function setNazwa31(?string $nazwa31): static
    {
        $this->nazwa31 = $nazwa31;

        return $this;
    }

    public function getSkladowa32(): ?Polprodukty
    {
        return $this->skladowa32;
    }

    public function setSkladowa32(?Polprodukty $skladowa32): static
    {
        $this->skladowa32 = $skladowa32;

        return $this;
    }

    public function getSztuk32(): ?float
    {
        return $this->sztuk32;
    }

    public function setSztuk32(?float $sztuk32): static
    {
        $this->sztuk32 = $sztuk32;

        return $this;
    }

    public function getCena32(): ?float
    {
        return $this->cena32;
    }

    public function setCena32(?float $cena32): static
    {
        $this->cena32 = $cena32;

        return $this;
    }

    public function getWartosc32(): ?float
    {
        return $this->wartosc32;
    }

    public function setWartosc32(?float $wartosc32): static
    {
        $this->wartosc32 = $wartosc32;

        return $this;
    }

    public function getNazwa32(): ?string
    {
        return $this->nazwa32;
    }

    public function setNazwa32(?string $nazwa32): static
    {
        $this->nazwa32 = $nazwa32;

        return $this;
    }

    public function getSkladowa33(): ?Polprodukty
    {
        return $this->skladowa33;
    }

    public function setSkladowa33(?Polprodukty $skladowa33): static
    {
        $this->skladowa33 = $skladowa33;

        return $this;
    }

    public function getSztuk33(): ?float
    {
        return $this->sztuk33;
    }

    public function setSztuk33(?float $sztuk33): static
    {
        $this->sztuk33 = $sztuk33;

        return $this;
    }

    public function getCena33(): ?float
    {
        return $this->cena33;
    }

    public function setCena33(?float $cena33): static
    {
        $this->cena33 = $cena33;

        return $this;
    }

    public function getWartosc33(): ?float
    {
        return $this->wartosc33;
    }

    public function setWartosc33(?float $wartosc33): static
    {
        $this->wartosc33 = $wartosc33;

        return $this;
    }

    public function getNazwa33(): ?string
    {
        return $this->nazwa33;
    }

    public function setNazwa33(?string $nazwa33): static
    {
        $this->nazwa33 = $nazwa33;

        return $this;
    }

    public function getSkladowa34(): ?Polprodukty
    {
        return $this->skladowa34;
    }

    public function setSkladowa34(?Polprodukty $skladowa34): static
    {
        $this->skladowa34 = $skladowa34;

        return $this;
    }

    public function getSztuk34(): ?float
    {
        return $this->sztuk34;
    }

    public function setSztuk34(?float $sztuk34): static
    {
        $this->sztuk34 = $sztuk34;

        return $this;
    }

    public function getCena34(): ?float
    {
        return $this->cena34;
    }

    public function setCena34(?float $cena34): static
    {
        $this->cena34 = $cena34;

        return $this;
    }

    public function getWartosc34(): ?float
    {
        return $this->wartosc34;
    }

    public function setWartosc34(?float $wartosc34): static
    {
        $this->wartosc34 = $wartosc34;

        return $this;
    }

    public function getNazwa34(): ?string
    {
        return $this->nazwa34;
    }

    public function setNazwa34(?string $nazwa34): static
    {
        $this->nazwa34 = $nazwa34;

        return $this;
    }

    public function getSkladowa35(): ?Polprodukty
    {
        return $this->skladowa35;
    }

    public function setSkladowa35(?Polprodukty $skladowa35): static
    {
        $this->skladowa35 = $skladowa35;

        return $this;
    }

    public function getSztuk35(): ?float
    {
        return $this->sztuk35;
    }

    public function setSztuk35(?float $sztuk35): static
    {
        $this->sztuk35 = $sztuk35;

        return $this;
    }

    public function getCena35(): ?float
    {
        return $this->cena35;
    }

    public function setCena35(?float $cena35): static
    {
        $this->cena35 = $cena35;

        return $this;
    }

    public function getWartosc35(): ?float
    {
        return $this->wartosc35;
    }

    public function setWartosc35(?float $wartosc35): static
    {
        $this->wartosc35 = $wartosc35;

        return $this;
    }

    public function getNazwa35(): ?string
    {
        return $this->nazwa35;
    }

    public function setNazwa35(?string $nazwa35): static
    {
        $this->nazwa35 = $nazwa35;

        return $this;
    }

    public function getSkladowa36(): ?Polprodukty
    {
        return $this->skladowa36;
    }

    public function setSkladowa36(?Polprodukty $skladowa36): static
    {
        $this->skladowa36 = $skladowa36;

        return $this;
    }

    public function getSztuk36(): ?float
    {
        return $this->sztuk36;
    }

    public function setSztuk36(?float $sztuk36): static
    {
        $this->sztuk36 = $sztuk36;

        return $this;
    }

    public function getCena36(): ?float
    {
        return $this->cena36;
    }

    public function setCena36(?float $cena36): static
    {
        $this->cena36 = $cena36;

        return $this;
    }

    public function getWartosc36(): ?float
    {
        return $this->wartosc36;
    }

    public function setWartosc36(?float $wartosc36): static
    {
        $this->wartosc36 = $wartosc36;

        return $this;
    }

    public function getNazwa36(): ?string
    {
        return $this->nazwa36;
    }

    public function setNazwa36(?string $nazwa36): static
    {
        $this->nazwa36 = $nazwa36;

        return $this;
    }

    public function getSkladowa37(): ?Polprodukty
    {
        return $this->skladowa37;
    }

    public function setSkladowa37(?Polprodukty $skladowa37): static
    {
        $this->skladowa37 = $skladowa37;

        return $this;
    }

    public function getSztuk37(): ?float
    {
        return $this->sztuk37;
    }

    public function setSztuk37(?float $sztuk37): static
    {
        $this->sztuk37 = $sztuk37;

        return $this;
    }

    public function getCena37(): ?float
    {
        return $this->cena37;
    }

    public function setCena37(?float $cena37): static
    {
        $this->cena37 = $cena37;

        return $this;
    }

    public function getWartosc37(): ?float
    {
        return $this->wartosc37;
    }

    public function setWartosc37(?float $wartosc37): static
    {
        $this->wartosc37 = $wartosc37;

        return $this;
    }

    public function getNazwa37(): ?string
    {
        return $this->nazwa37;
    }

    public function setNazwa37(?string $nazwa37): static
    {
        $this->nazwa37 = $nazwa37;

        return $this;
    }


    public function getSkladowa38(): ?Polprodukty
    {
        return $this->skladowa38;
    }

    public function setSkladowa38(?Polprodukty $skladowa38): static
    {
        $this->skladowa38 = $skladowa38;

        return $this;
    }

    public function getSztuk38(): ?float
    {
        return $this->sztuk38;
    }

    public function setSztuk38(?float $sztuk38): static
    {
        $this->sztuk38 = $sztuk38;

        return $this;
    }

    public function getCena38(): ?float
    {
        return $this->cena38;
    }

    public function setCena38(?float $cena38): static
    {
        $this->cena38 = $cena38;

        return $this;
    }

    public function getWartosc38(): ?float
    {
        return $this->wartosc38;
    }

    public function setWartosc38(?float $wartosc38): static
    {
        $this->wartosc38 = $wartosc38;

        return $this;
    }

    public function getNazwa38(): ?string
    {
        return $this->nazwa38;
    }

    public function setNazwa38(?string $nazwa38): static
    {
        $this->nazwa38 = $nazwa38;

        return $this;
    }

    public function getSkladowa39(): ?Polprodukty
    {
        return $this->skladowa39;
    }

    public function setSkladowa39(?Polprodukty $skladowa39): static
    {
        $this->skladowa39 = $skladowa39;

        return $this;
    }

    public function getSztuk39(): ?float
    {
        return $this->sztuk39;
    }

    public function setSztuk39(?float $sztuk39): static
    {
        $this->sztuk39 = $sztuk39;

        return $this;
    }

    public function getCena39(): ?float
    {
        return $this->cena39;
    }

    public function setCena39(?float $cena39): static
    {
        $this->cena39 = $cena39;

        return $this;
    }

    public function getWartosc39(): ?float
    {
        return $this->wartosc39;
    }

    public function setWartosc39(?float $wartosc39): static
    {
        $this->wartosc39 = $wartosc39;

        return $this;
    }

    public function getNazwa39(): ?string
    {
        return $this->nazwa39;
    }

    public function setNazwa39(?string $nazwa39): static
    {
        $this->nazwa39 = $nazwa39;

        return $this;
    }

    public function getMarzaSolo(): ?float
    {
        return $this->marza_solo;
    }

    public function setMarzaSolo(float $marza_solo): static
    {
        $this->marza_solo = $marza_solo;

        return $this;
    }

    public function getMarzaWazon(): ?float
    {
        return $this->marza_wazon;
    }

    public function setMarzaWazon(float $marza_wazon): static
    {
        $this->marza_wazon = $marza_wazon;

        return $this;
    }

    public function getCenaSolo(): ?float
    {
        return $this->cena_solo;
    }

    public function setCenaSolo(?float $cena_solo): static
    {
        $this->cena_solo = $cena_solo;

        return $this;
    }

    public function getCenaWazon(): ?float
    {
        return $this->cena_wazon;
    }

    public function setCenaWazon(?float $cena_wazon): static
    {
        $this->cena_wazon = $cena_wazon;

        return $this;
    }

    public function getCenaKpl(): ?float
    {
        return $this->cena_kpl;
    }

    public function setCenaKpl(?float $cena_kpl): static
    {
        $this->cena_kpl = $cena_kpl;

        return $this;
    }

    public function getCenaKpl2w(): ?float
    {
        return $this->cena_kpl_2w;
    }

    public function setCenaKpl2w(?float $cena_kpl_2w): static
    {
        $this->cena_kpl_2w = $cena_kpl_2w;

        return $this;
    }

    public function getZdjecie(): ?string
    {
        return $this->zdjecie;
    }

    public function setZdjecie(?string $zdjecie): static
    {
        $this->zdjecie = $zdjecie;

        return $this;
    }

    public function getZdjecieSolo(): ?string
    {
        return $this->zdjecie_solo;
    }

    public function setZdjecieSolo(?string $zdjecie): static
    {
        $this->zdjecie_solo = $zdjecie;

        return $this;
    }

    public function getZdjecieWazon(): ?string
    {
        return $this->zdjecie_wazon;
    }

    public function setZdjecieWazon(?string $zdjecie): static
    {
        $this->zdjecie_wazon = $zdjecie;

        return $this;
    }


    public function isAktywny(): ?bool
    {
        return $this->aktywny;
    }

    public function setAktywny(bool $aktywny): self
    {
        $this->aktywny = $aktywny;

        return $this;
    }

    public function getGrupa(): ?Grupy
    {
        return $this->grupa;
    }

    public function setGrupa(?Grupy $grupa): self
    {
        $this->grupa = $grupa;

        return $this;
    }

    public function __toString(): string
    {
        return 'wyce';
    }


    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt8;

    

    public function getDodacPolprodukt8(): ?bool
    {
        return $this->dodacPolprodukt8;
    }

    public function setDodacPolprodukt8(bool $dodacPolprodukt8): self
    {
        $this->dodacPolprodukt8 = $dodacPolprodukt8;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt9;



    public function getDodacPolprodukt9(): ?bool
    {
        return $this->dodacPolprodukt9;
    }

    public function setDodacPolprodukt9(bool $dodacPolprodukt9): self
    {
        $this->dodacPolprodukt9 = $dodacPolprodukt9;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt10;



    public function getDodacPolprodukt10(): ?bool
    {
        return $this->dodacPolprodukt10;
    }

    public function setDodacPolprodukt10(bool $dodacPolprodukt10): self
    {
        $this->dodacPolprodukt10 = $dodacPolprodukt10;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt11;



    public function getDodacPolprodukt11(): ?bool
    {
        return $this->dodacPolprodukt11;
    }

    public function setDodacPolprodukt11(bool $dodacPolprodukt11): self
    {
        $this->dodacPolprodukt11 = $dodacPolprodukt11;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt12;



    public function getDodacPolprodukt12(): ?bool
    {
        return $this->dodacPolprodukt12;
    }

    public function setDodacPolprodukt12(bool $dodacPolprodukt12): self
    {
        $this->dodacPolprodukt12 = $dodacPolprodukt12;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt13;



    public function getDodacPolprodukt13(): ?bool
    {
        return $this->dodacPolprodukt13;
    }

    public function setDodacPolprodukt13(bool $dodacPolprodukt13): self
    {
        $this->dodacPolprodukt13 = $dodacPolprodukt13;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt14;



    public function getDodacPolprodukt14(): ?bool
    {
        return $this->dodacPolprodukt14;
    }

    public function setDodacPolprodukt14(bool $dodacPolprodukt14): self
    {
        $this->dodacPolprodukt14 = $dodacPolprodukt14;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt15;



    public function getDodacPolprodukt15(): ?bool
    {
        return $this->dodacPolprodukt15;
    }

    public function setDodacPolprodukt15(bool $dodacPolprodukt15): self
    {
        $this->dodacPolprodukt15 = $dodacPolprodukt15;

        return $this;
    }
    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt16;



    public function getDodacPolprodukt16(): ?bool
    {
        return $this->dodacPolprodukt16;
    }

    public function setDodacPolprodukt16(bool $dodacPolprodukt16): self
    {
        $this->dodacPolprodukt16 = $dodacPolprodukt16;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt17;



    public function getDodacPolprodukt17(): ?bool
    {
        return $this->dodacPolprodukt17;
    }

    public function setDodacPolprodukt17(bool $dodacPolprodukt17): self
    {
        $this->dodacPolprodukt17 = $dodacPolprodukt17;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt18;



    public function getDodacPolprodukt18(): ?bool
    {
        return $this->dodacPolprodukt18;
    }

    public function setDodacPolprodukt18(bool $dodacPolprodukt18): self
    {
        $this->dodacPolprodukt18 = $dodacPolprodukt18;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt19;



    public function getDodacPolprodukt19(): ?bool
    {
        return $this->dodacPolprodukt19;
    }

    public function setDodacPolprodukt19(bool $dodacPolprodukt19): self
    {
        $this->dodacPolprodukt19 = $dodacPolprodukt19;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt20;



    public function getDodacPolprodukt20(): ?bool
    {
        return $this->dodacPolprodukt20;
    }

    public function setDodacPolprodukt20(bool $dodacPolprodukt20): self
    {
        $this->dodacPolprodukt20 = $dodacPolprodukt20;

        return $this;
    }

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $dodacPolprodukt21;

    #[ORM\Column(nullable: true)]
    private ?bool $blokujMarzaSolo = null;

    #[ORM\Column(nullable: true)]
    private ?bool $blokujMarzaWazon = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'pracownik')]
    private Collection $pracownik;

    public function __construct()
    {
        $this->pracownik = new ArrayCollection();
    }



    public function getDodacPolprodukt21(): ?bool
    {
        return $this->dodacPolprodukt21;
    }

    public function setDodacPolprodukt21(bool $dodacPolprodukt21): self
    {
        $this->dodacPolprodukt21 = $dodacPolprodukt21;

        return $this;
    }

    public function isBlokujMarzaSolo(): ?bool
    {
        return $this->blokujMarzaSolo;
    }

    public function setBlokujMarzaSolo(?bool $blokujMarzaSolo): static
    {
        $this->blokujMarzaSolo = $blokujMarzaSolo;

        return $this;
    }

    public function isBlokujMarzaWazon(): ?bool
    {
        return $this->blokujMarzaWazon;
    }

    public function setBlokujMarzaWazon(?bool $blokujMarzaWazon): static
    {
        $this->blokujMarzaWazon = $blokujMarzaWazon;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getPracownik(): Collection
    {
        return $this->pracownik;
    }

    public function addPracownik(User $pracownik): static
    {
        if (!$this->pracownik->contains($pracownik)) {
            $this->pracownik->add($pracownik);
        }

        return $this;
    }

    public function removePracownik(User $pracownik): static
    {
        $this->pracownik->removeElement($pracownik);

        return $this;
    }

    public function idPracownikow()
    {
        return '';
    }


}
