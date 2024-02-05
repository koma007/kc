<?php

namespace App\Entity;

use App\Repository\ZeszytRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZeszytRepository::class)]
class Zeszyt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function __construct()
    {
        $this->rodzaj1 = 'kpl';
        $this->rodzaj2 = 'kpl';
        $this->rodzaj3 = 'kpl';
        $this->rodzaj4 = 'kpl';
        $this->rodzaj5 = 'kpl';
        $this->rodzaj6 = 'kpl';
        $this->rodzaj7 = 'kpl';
        $this->rodzaj8 = 'kpl';
        $this->rodzaj9 = 'kpl';
        $this->rodzaj10 = 'kpl';
        $this->rodzaj11 = 'kpl';
        $this->rodzaj12 = 'kpl';
        $this->rodzaj13 = 'kpl';
        $this->rodzaj14 = 'kpl';
        $this->rodzaj15 = 'kpl';
        $this->rodzaj16 = 'kpl';
        $this->rodzaj17 = 'kpl';
        $this->rodzaj18 = 'kpl';
        $this->rodzaj19 = 'kpl';
        $this->rodzaj20 = 'kpl';
        $this->rodzaj21 = 'kpl';
        $this->rodzaj22 = 'kpl';
        $this->rodzaj23 = 'kpl';
        $this->rodzaj24 = 'kpl';
        $this->rodzaj25 = 'kpl';
        $this->rodzaj26 = 'kpl';
        $this->rodzaj27 = 'kpl';
        $this->rodzaj28 = 'kpl';
        $this->rodzaj29 = 'kpl';
        $this->rodzaj30 = 'kpl';
        $this->rodzaj31 = 'kpl';
        $this->rodzaj32 = 'kpl';
        $this->rodzaj33 = 'kpl';
        $this->rodzaj34 = 'kpl';
        $this->rodzaj35 = 'kpl';
        $this->rodzaj36 = 'kpl';
        $this->rodzaj37 = 'kpl';
        $this->rodzaj38 = 'kpl';
        $this->rodzaj39 = 'kpl';
        $this->rodzaj40 = 'kpl';
    }

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk1 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena1 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc1 = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(
        min: 1,
        max: 10,
        notInRangeMessage: 'Wprowadź wartość między 1 a 10.',
    )]
    private ?int $wozek1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa1 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKompozycja1(): ?Wyceny
    {
        return $this->kompozycja1;
    }

    public function setKompozycja1(?Wyceny $kompozycja1): static
    {
        $this->kompozycja1 = $kompozycja1;

        return $this;
    }

    public function getSztuk1(): ?int
    {
        return $this->sztuk1;
    }

    public function setSztuk1(?int $sztuk1): static
    {
        $this->sztuk1 = $sztuk1;

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

    public function getWartosc1(): ?float
    {
        return $this->wartosc1;
    }

    public function setWartosc1(?float $wartosc1): static
    {
        $this->wartosc1 = $wartosc1;

        return $this;
    }

    public function getWozek1(): ?int
    {
        return $this->wozek1;
    }

    public function setWozek1(?int $wozek1): static
    {
        $this->wozek1 = $wozek1;

        return $this;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(?string $nazwa): static
    {
        $this->nazwa = $nazwa;

        return $this;
    }
    public function getNazwa1(): ?string
    {
        return $this->nazwa1;
    }

    public function setNazwa1(?string $nazwa1): static
    {
        $this->nazwa1 = $nazwa1;

        return $this;
    }

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa2 = null;

    public function getKompozycja2(): ?Wyceny
    {
        return $this->kompozycja2;
    }

    public function setKompozycja2(?Wyceny $kompozycja2): static
    {
        $this->kompozycja2 = $kompozycja2;

        return $this;
    }

    public function getSztuk2(): ?int
    {
        return $this->sztuk2;
    }

    public function setSztuk2(?int $sztuk2): static
    {
        $this->sztuk2 = $sztuk2;

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

    public function getWartosc2(): ?float
    {
        return $this->wartosc2;
    }

    public function setWartosc2(?float $wartosc2): static
    {
        $this->wartosc2 = $wartosc2;

        return $this;
    }

    public function getWozek2(): ?int
    {
        return $this->wozek2;
    }

    public function setWozek2(?int $wozek2): static
    {
        $this->wozek2 = $wozek2;

        return $this;
    }

    public function getNazwa2(): ?string
    {
        return $this->nazwa2;
    }

    public function setNazwa2(?string $nazwa2): static
    {
        $this->nazwa2 = $nazwa2;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk3 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena3 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa3 = null;

    public function getKompozycja3(): ?Wyceny
    {
        return $this->kompozycja3;
    }

    public function setKompozycja3(?Wyceny $kompozycja3): static
    {
        $this->kompozycja3 = $kompozycja3;

        return $this;
    }

    public function getSztuk3(): ?int
    {
        return $this->sztuk3;
    }

    public function setSztuk3(?int $sztuk3): static
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

    public function getWozek3(): ?int
    {
        return $this->wozek3;
    }

    public function setWozek3(?int $wozek3): static
    {
        $this->wozek3 = $wozek3;

        return $this;
    }

    public function getNazwa3(): ?string
    {
        return $this->nazwa3;
    }

    public function setNazwa3(?string $nazwa3): static
    {
        $this->nazwa3 = $nazwa3;

        return $this;
    }

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja4 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk4 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena4 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc4 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa4 = null;

    public function getKompozycja4(): ?Wyceny
    {
        return $this->kompozycja4;
    }

    public function setKompozycja4(?Wyceny $kompozycja4): static
    {
        $this->kompozycja4 = $kompozycja4;

        return $this;
    }

    public function getSztuk4(): ?int
    {
        return $this->sztuk4;
    }

    public function setSztuk4(?int $sztuk4): static
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

    public function getWozek4(): ?int
    {
        return $this->wozek4;
    }

    public function setWozek4(?int $wozek4): static
    {
        $this->wozek4 = $wozek4;

        return $this;
    }

    public function getNazwa4(): ?string
    {
        return $this->nazwa4;
    }

    public function setNazwa4(?string $nazwa4): static
    {
        $this->nazwa4 = $nazwa4;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja5 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk5 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena5 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc5 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa5 = null;

    public function getKompozycja5(): ?Wyceny
    {
        return $this->kompozycja5;
    }

    public function setKompozycja5(?Wyceny $kompozycja5): static
    {
        $this->kompozycja5 = $kompozycja5;

        return $this;
    }

    public function getSztuk5(): ?int
    {
        return $this->sztuk5;
    }

    public function setSztuk5(?int $sztuk5): static
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

    public function getWozek5(): ?int
    {
        return $this->wozek5;
    }

    public function setWozek5(?int $wozek5): static
    {
        $this->wozek5 = $wozek5;

        return $this;
    }

    public function getNazwa5(): ?string
    {
        return $this->nazwa5;
    }

    public function setNazwa5(?string $nazwa5): static
    {
        $this->nazwa5 = $nazwa5;

        return $this;
    }

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja6 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena6 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc6 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek6 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa6 = null;

    public function getKompozycja6(): ?Wyceny
    {
        return $this->kompozycja6;
    }

    public function setKompozycja6(?Wyceny $kompozycja6): static
    {
        $this->kompozycja6 = $kompozycja6;

        return $this;
    }

    public function getSztuk6(): ?int
    {
        return $this->sztuk6;
    }

    public function setSztuk6(?int $sztuk6): static
    {
        $this->sztuk6 = $sztuk6;

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

    public function getWartosc6(): ?float
    {
        return $this->wartosc6;
    }

    public function setWartosc6(?float $wartosc6): static
    {
        $this->wartosc6 = $wartosc6;

        return $this;
    }

    public function getWozek6(): ?int
    {
        return $this->wozek6;
    }

    public function setWozek6(?int $wozek6): static
    {
        $this->wozek6 = $wozek6;

        return $this;
    }

    public function getNazwa6(): ?string
    {
        return $this->nazwa6;
    }

    public function setNazwa6(?string $nazwa6): static
    {
        $this->nazwa6 = $nazwa6;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja7 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena7 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc7 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek7 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa7 = null;

    public function getKompozycja7(): ?Wyceny
    {
        return $this->kompozycja7;
    }

    public function setKompozycja7(?Wyceny $kompozycja7): static
    {
        $this->kompozycja7 = $kompozycja7;

        return $this;
    }

    public function getSztuk7(): ?int
    {
        return $this->sztuk7;
    }

    public function setSztuk7(?int $sztuk7): static
    {
        $this->sztuk7 = $sztuk7;

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

    public function getWartosc7(): ?float
    {
        return $this->wartosc7;
    }

    public function setWartosc7(?float $wartosc7): static
    {
        $this->wartosc7 = $wartosc7;

        return $this;
    }

    public function getWozek7(): ?int
    {
        return $this->wozek7;
    }

    public function setWozek7(?int $wozek7): static
    {
        $this->wozek7 = $wozek7;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja8 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk8 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena8 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc8 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek8 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa8 = null;

    public function getKompozycja8(): ?Wyceny
    {
        return $this->kompozycja8;
    }

    public function setKompozycja8(?Wyceny $kompozycja8): static
    {
        $this->kompozycja8 = $kompozycja8;

        return $this;
    }

    public function getSztuk8(): ?int
    {
        return $this->sztuk8;
    }

    public function setSztuk8(?int $sztuk8): static
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

    public function getWozek8(): ?int
    {
        return $this->wozek8;
    }

    public function setWozek8(?int $wozek8): static
    {
        $this->wozek8 = $wozek8;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja9 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk9 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena9 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc9 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek9 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa9 = null;

    public function getKompozycja9(): ?Wyceny
    {
        return $this->kompozycja9;
    }

    public function setKompozycja9(?Wyceny $kompozycja9): static
    {
        $this->kompozycja9 = $kompozycja9;

        return $this;
    }

    public function getSztuk9(): ?int
    {
        return $this->sztuk9;
    }

    public function setSztuk9(?int $sztuk9): static
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

    public function getWozek9(): ?int
    {
        return $this->wozek9;
    }

    public function setWozek9(?int $wozek9): static
    {
        $this->wozek9 = $wozek9;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja10 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk10 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena10 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc10 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek10 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa10 = null;

    public function getKompozycja10(): ?Wyceny
    {
        return $this->kompozycja10;
    }

    public function setKompozycja10(?Wyceny $kompozycja10): static
    {
        $this->kompozycja10 = $kompozycja10;

        return $this;
    }

    public function getSztuk10(): ?int
    {
        return $this->sztuk10;
    }

    public function setSztuk10(?int $sztuk10): static
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

    public function getWozek10(): ?int
    {
        return $this->wozek10;
    }

    public function setWozek10(?int $wozek10): static
    {
        $this->wozek10 = $wozek10;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja11 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk11 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena11 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc11 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek11 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa11 = null;

    public function getKompozycja11(): ?Wyceny
    {
        return $this->kompozycja11;
    }

    public function setKompozycja11(?Wyceny $kompozycja11): static
    {
        $this->kompozycja11 = $kompozycja11;

        return $this;
    }

    public function getSztuk11(): ?int
    {
        return $this->sztuk11;
    }

    public function setSztuk11(?int $sztuk11): static
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

    public function getWozek11(): ?int
    {
        return $this->wozek11;
    }

    public function setWozek11(?int $wozek11): static
    {
        $this->wozek11 = $wozek11;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja12 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk12 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena12 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc12 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek12 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa12 = null;

    public function getKompozycja12(): ?Wyceny
    {
        return $this->kompozycja12;
    }

    public function setKompozycja12(?Wyceny $kompozycja12): static
    {
        $this->kompozycja12 = $kompozycja12;

        return $this;
    }

    public function getSztuk12(): ?int
    {
        return $this->sztuk12;
    }

    public function setSztuk12(?int $sztuk12): static
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

    public function getWozek12(): ?int
    {
        return $this->wozek12;
    }

    public function setWozek12(?int $wozek12): static
    {
        $this->wozek12 = $wozek12;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja13 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk13 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena13 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc13 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek13 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa13 = null;

    public function getKompozycja13(): ?Wyceny
    {
        return $this->kompozycja13;
    }

    public function setKompozycja13(?Wyceny $kompozycja13): static
    {
        $this->kompozycja13 = $kompozycja13;

        return $this;
    }

    public function getSztuk13(): ?int
    {
        return $this->sztuk13;
    }

    public function setSztuk13(?int $sztuk13): static
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

    public function getWozek13(): ?int
    {
        return $this->wozek13;
    }

    public function setWozek13(?int $wozek13): static
    {
        $this->wozek13 = $wozek13;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja14 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk14 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena14 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc14 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek14 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa14 = null;

    public function getKompozycja14(): ?Wyceny
    {
        return $this->kompozycja14;
    }

    public function setKompozycja14(?Wyceny $kompozycja14): static
    {
        $this->kompozycja14 = $kompozycja14;

        return $this;
    }

    public function getSztuk14(): ?int
    {
        return $this->sztuk14;
    }

    public function setSztuk14(?int $sztuk14): static
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

    public function getWozek14(): ?int
    {
        return $this->wozek14;
    }

    public function setWozek14(?int $wozek14): static
    {
        $this->wozek14 = $wozek14;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja15 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk15 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena15 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc15 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek15 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa15 = null;

    public function getKompozycja15(): ?Wyceny
    {
        return $this->kompozycja15;
    }

    public function setKompozycja15(?Wyceny $kompozycja15): static
    {
        $this->kompozycja15 = $kompozycja15;

        return $this;
    }

    public function getSztuk15(): ?int
    {
        return $this->sztuk15;
    }

    public function setSztuk15(?int $sztuk15): static
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

    public function getWozek15(): ?int
    {
        return $this->wozek15;
    }

    public function setWozek15(?int $wozek15): static
    {
        $this->wozek15 = $wozek15;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja16 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk16 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena16 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc16 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek16 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa16 = null;

    public function getKompozycja16(): ?Wyceny
    {
        return $this->kompozycja16;
    }

    public function setKompozycja16(?Wyceny $kompozycja16): static
    {
        $this->kompozycja16 = $kompozycja16;

        return $this;
    }

    public function getSztuk16(): ?int
    {
        return $this->sztuk16;
    }

    public function setSztuk16(?int $sztuk16): static
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

    public function getWozek16(): ?int
    {
        return $this->wozek16;
    }

    public function setWozek16(?int $wozek16): static
    {
        $this->wozek16 = $wozek16;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja17 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk17 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena17 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc17 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek17 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa17 = null;

    public function getKompozycja17(): ?Wyceny
    {
        return $this->kompozycja17;
    }

    public function setKompozycja17(?Wyceny $kompozycja17): static
    {
        $this->kompozycja17 = $kompozycja17;

        return $this;
    }

    public function getSztuk17(): ?int
    {
        return $this->sztuk17;
    }

    public function setSztuk17(?int $sztuk17): static
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

    public function getWozek17(): ?int
    {
        return $this->wozek17;
    }

    public function setWozek17(?int $wozek17): static
    {
        $this->wozek17 = $wozek17;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja18 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk18 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena18 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc18 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek18 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa18 = null;

    public function getKompozycja18(): ?Wyceny
    {
        return $this->kompozycja18;
    }

    public function setKompozycja18(?Wyceny $kompozycja18): static
    {
        $this->kompozycja18 = $kompozycja18;

        return $this;
    }

    public function getSztuk18(): ?int
    {
        return $this->sztuk18;
    }

    public function setSztuk18(?int $sztuk18): static
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

    public function getWozek18(): ?int
    {
        return $this->wozek18;
    }

    public function setWozek18(?int $wozek18): static
    {
        $this->wozek18 = $wozek18;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja19 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk19 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena19 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc19 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek19 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa19 = null;

    public function getKompozycja19(): ?Wyceny
    {
        return $this->kompozycja19;
    }

    public function setKompozycja19(?Wyceny $kompozycja19): static
    {
        $this->kompozycja19 = $kompozycja19;

        return $this;
    }

    public function getSztuk19(): ?int
    {
        return $this->sztuk19;
    }

    public function setSztuk19(?int $sztuk19): static
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

    public function getWozek19(): ?int
    {
        return $this->wozek19;
    }

    public function setWozek19(?int $wozek19): static
    {
        $this->wozek19 = $wozek19;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja20 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk20 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena20 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc20 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek20 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa20 = null;

    public function getKompozycja20(): ?Wyceny
    {
        return $this->kompozycja20;
    }

    public function setKompozycja20(?Wyceny $kompozycja20): static
    {
        $this->kompozycja20 = $kompozycja20;

        return $this;
    }

    public function getSztuk20(): ?int
    {
        return $this->sztuk20;
    }

    public function setSztuk20(?int $sztuk20): static
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

    public function getWozek20(): ?int
    {
        return $this->wozek20;
    }

    public function setWozek20(?int $wozek20): static
    {
        $this->wozek20 = $wozek20;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja21 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk21 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena21 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc21 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek21 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa21 = null;

    public function getKompozycja21(): ?Wyceny
    {
        return $this->kompozycja21;
    }

    public function setKompozycja21(?Wyceny $kompozycja21): static
    {
        $this->kompozycja21 = $kompozycja21;

        return $this;
    }

    public function getSztuk21(): ?int
    {
        return $this->sztuk21;
    }

    public function setSztuk21(?int $sztuk21): static
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

    public function getWozek21(): ?int
    {
        return $this->wozek21;
    }

    public function setWozek21(?int $wozek21): static
    {
        $this->wozek21 = $wozek21;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja22 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk22 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena22 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc22 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek22 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa22 = null;

    public function getKompozycja22(): ?Wyceny
    {
        return $this->kompozycja22;
    }

    public function setKompozycja22(?Wyceny $kompozycja22): static
    {
        $this->kompozycja22 = $kompozycja22;

        return $this;
    }

    public function getSztuk22(): ?int
    {
        return $this->sztuk22;
    }

    public function setSztuk22(?int $sztuk22): static
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

    public function getWozek22(): ?int
    {
        return $this->wozek22;
    }

    public function setWozek22(?int $wozek22): static
    {
        $this->wozek22 = $wozek22;

        return $this;
    }

    public function getNazwa22(): ?string
    {
        return $this->nazwa22;
    }

    public function setNazwa22(?string $nazwa22): static
    {
        $this->nazwa22 = $nazwa22;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja23 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk23 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena23 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc23 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek23 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa23 = null;

    public function getKompozycja23(): ?Wyceny
    {
        return $this->kompozycja23;
    }

    public function setKompozycja23(?Wyceny $kompozycja23): static
    {
        $this->kompozycja23 = $kompozycja23;

        return $this;
    }

    public function getSztuk23(): ?int
    {
        return $this->sztuk23;
    }

    public function setSztuk23(?int $sztuk23): static
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

    public function getWozek23(): ?int
    {
        return $this->wozek23;
    }

    public function setWozek23(?int $wozek23): static
    {
        $this->wozek23 = $wozek23;

        return $this;
    }

    public function getNazwa23(): ?string
    {
        return $this->nazwa23;
    }

    public function setNazwa23(?string $nazwa23): static
    {
        $this->nazwa23 = $nazwa23;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja24 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk24 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena24 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc24 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek24 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa24 = null;

    public function getKompozycja24(): ?Wyceny
    {
        return $this->kompozycja24;
    }

    public function setKompozycja24(?Wyceny $kompozycja24): static
    {
        $this->kompozycja24 = $kompozycja24;

        return $this;
    }

    public function getSztuk24(): ?int
    {
        return $this->sztuk24;
    }

    public function setSztuk24(?int $sztuk24): static
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

    public function getWozek24(): ?int
    {
        return $this->wozek24;
    }

    public function setWozek24(?int $wozek24): static
    {
        $this->wozek24 = $wozek24;

        return $this;
    }

    public function getNazwa24(): ?string
    {
        return $this->nazwa24;
    }

    public function setNazwa24(?string $nazwa24): static
    {
        $this->nazwa24 = $nazwa24;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja25 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk25 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena25 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc25 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek25 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa25 = null;

    public function getKompozycja25(): ?Wyceny
    {
        return $this->kompozycja25;
    }

    public function setKompozycja25(?Wyceny $kompozycja25): static
    {
        $this->kompozycja25 = $kompozycja25;

        return $this;
    }

    public function getSztuk25(): ?int
    {
        return $this->sztuk25;
    }

    public function setSztuk25(?int $sztuk25): static
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

    public function getWozek25(): ?int
    {
        return $this->wozek25;
    }

    public function setWozek25(?int $wozek25): static
    {
        $this->wozek25 = $wozek25;

        return $this;
    }

    public function getNazwa25(): ?string
    {
        return $this->nazwa25;
    }

    public function setNazwa25(?string $nazwa25): static
    {
        $this->nazwa25 = $nazwa25;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja26 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk26 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena26 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc26 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek26 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa26 = null;

    public function getKompozycja26(): ?Wyceny
    {
        return $this->kompozycja26;
    }

    public function setKompozycja26(?Wyceny $kompozycja26): static
    {
        $this->kompozycja26 = $kompozycja26;

        return $this;
    }

    public function getSztuk26(): ?int
    {
        return $this->sztuk26;
    }

    public function setSztuk26(?int $sztuk26): static
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

    public function getWozek26(): ?int
    {
        return $this->wozek26;
    }

    public function setWozek26(?int $wozek26): static
    {
        $this->wozek26 = $wozek26;

        return $this;
    }

    public function getNazwa26(): ?string
    {
        return $this->nazwa26;
    }

    public function setNazwa26(?string $nazwa26): static
    {
        $this->nazwa26 = $nazwa26;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja27 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk27 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena27 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc27 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek27 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa27 = null;

    public function getKompozycja27(): ?Wyceny
    {
        return $this->kompozycja27;
    }

    public function setKompozycja27(?Wyceny $kompozycja27): static
    {
        $this->kompozycja27 = $kompozycja27;

        return $this;
    }

    public function getSztuk27(): ?int
    {
        return $this->sztuk27;
    }

    public function setSztuk27(?int $sztuk27): static
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

    public function getWozek27(): ?int
    {
        return $this->wozek27;
    }

    public function setWozek27(?int $wozek27): static
    {
        $this->wozek27 = $wozek27;

        return $this;
    }

    public function getNazwa27(): ?string
    {
        return $this->nazwa27;
    }

    public function setNazwa27(?string $nazwa27): static
    {
        $this->nazwa27 = $nazwa27;

        return $this;
    }


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja28 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk28 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena28 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc28 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek28 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa28 = null;

    public function getKompozycja28(): ?Wyceny
    {
        return $this->kompozycja28;
    }

    public function setKompozycja28(?Wyceny $kompozycja28): static
    {
        $this->kompozycja28 = $kompozycja28;

        return $this;
    }

    public function getSztuk28(): ?int
    {
        return $this->sztuk28;
    }

    public function setSztuk28(?int $sztuk28): static
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

    public function getWozek28(): ?int
    {
        return $this->wozek28;
    }

    public function setWozek28(?int $wozek28): static
    {
        $this->wozek28 = $wozek28;

        return $this;
    }

    public function getNazwa28(): ?string
    {
        return $this->nazwa28;
    }

    public function setNazwa28(?string $nazwa28): static
    {
        $this->nazwa28 = $nazwa28;

        return $this;
    }

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja29 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk29 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena29 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc29 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek29 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa29 = null;

    public function getKompozycja29(): ?Wyceny
    {
        return $this->kompozycja29;
    }

    public function setKompozycja29(?Wyceny $kompozycja29): static
    {
        $this->kompozycja29 = $kompozycja29;

        return $this;
    }

    public function getSztuk29(): ?int
    {
        return $this->sztuk29;
    }

    public function setSztuk29(?int $sztuk29): static
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

    public function getWozek29(): ?int
    {
        return $this->wozek29;
    }

    public function setWozek29(?int $wozek29): static
    {
        $this->wozek29 = $wozek29;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja30 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk30 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena30 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc30 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek30 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa30 = null;

    public function getKompozycja30(): ?Wyceny
    {
        return $this->kompozycja30;
    }

    public function setKompozycja30(?Wyceny $kompozycja30): static
    {
        $this->kompozycja30 = $kompozycja30;

        return $this;
    }

    public function getSztuk30(): ?int
    {
        return $this->sztuk30;
    }

    public function setSztuk30(?int $sztuk30): static
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

    public function getWozek30(): ?int
    {
        return $this->wozek30;
    }

    public function setWozek30(?int $wozek30): static
    {
        $this->wozek30 = $wozek30;

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

    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja31 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk31 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena31 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc31 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek31 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa31 = null;

    public function getKompozycja31(): ?Wyceny
    {
        return $this->kompozycja31;
    }

    public function setKompozycja31(?Wyceny $kompozycja31): static
    {
        $this->kompozycja31 = $kompozycja31;

        return $this;
    }

    public function getSztuk31(): ?int
    {
        return $this->sztuk31;
    }

    public function setSztuk31(?int $sztuk31): static
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

    public function getWozek31(): ?int
    {
        return $this->wozek31;
    }

    public function setWozek31(?int $wozek31): static
    {
        $this->wozek31 = $wozek31;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja32 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk32 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena32 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc32 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek32 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa32 = null;

    public function getKompozycja32(): ?Wyceny
    {
        return $this->kompozycja32;
    }

    public function setKompozycja32(?Wyceny $kompozycja32): static
    {
        $this->kompozycja32 = $kompozycja32;

        return $this;
    }

    public function getSztuk32(): ?int
    {
        return $this->sztuk32;
    }

    public function setSztuk32(?int $sztuk32): static
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

    public function getWozek32(): ?int
    {
        return $this->wozek32;
    }

    public function setWozek32(?int $wozek32): static
    {
        $this->wozek32 = $wozek32;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja33 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk33 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena33 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc33 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek33 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa33 = null;

    public function getKompozycja33(): ?Wyceny
    {
        return $this->kompozycja33;
    }

    public function setKompozycja33(?Wyceny $kompozycja33): static
    {
        $this->kompozycja33 = $kompozycja33;

        return $this;
    }

    public function getSztuk33(): ?int
    {
        return $this->sztuk33;
    }

    public function setSztuk33(?int $sztuk33): static
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

    public function getWozek33(): ?int
    {
        return $this->wozek33;
    }

    public function setWozek33(?int $wozek33): static
    {
        $this->wozek33 = $wozek33;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja34 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk34 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena34 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc34 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek34 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa34 = null;

    public function getKompozycja34(): ?Wyceny
    {
        return $this->kompozycja34;
    }

    public function setKompozycja34(?Wyceny $kompozycja34): static
    {
        $this->kompozycja34 = $kompozycja34;

        return $this;
    }

    public function getSztuk34(): ?int
    {
        return $this->sztuk34;
    }

    public function setSztuk34(?int $sztuk34): static
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

    public function getWozek34(): ?int
    {
        return $this->wozek34;
    }

    public function setWozek34(?int $wozek34): static
    {
        $this->wozek34 = $wozek34;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja35 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk35 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena35 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc35 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek35 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa35 = null;

    public function getKompozycja35(): ?Wyceny
    {
        return $this->kompozycja35;
    }

    public function setKompozycja35(?Wyceny $kompozycja35): static
    {
        $this->kompozycja35 = $kompozycja35;

        return $this;
    }

    public function getSztuk35(): ?int
    {
        return $this->sztuk35;
    }

    public function setSztuk35(?int $sztuk35): static
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

    public function getWozek35(): ?int
    {
        return $this->wozek35;
    }

    public function setWozek35(?int $wozek35): static
    {
        $this->wozek35 = $wozek35;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja36 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk36 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena36 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc36 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek36 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa36 = null;

    public function getKompozycja36(): ?Wyceny
    {
        return $this->kompozycja36;
    }

    public function setKompozycja36(?Wyceny $kompozycja36): static
    {
        $this->kompozycja36 = $kompozycja36;

        return $this;
    }

    public function getSztuk36(): ?int
    {
        return $this->sztuk36;
    }

    public function setSztuk36(?int $sztuk36): static
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

    public function getWozek36(): ?int
    {
        return $this->wozek36;
    }

    public function setWozek36(?int $wozek36): static
    {
        $this->wozek36 = $wozek36;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja37 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk37 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena37 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc37 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek37 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa37 = null;

    public function getKompozycja37(): ?Wyceny
    {
        return $this->kompozycja37;
    }

    public function setKompozycja37(?Wyceny $kompozycja37): static
    {
        $this->kompozycja37 = $kompozycja37;

        return $this;
    }

    public function getSztuk37(): ?int
    {
        return $this->sztuk37;
    }

    public function setSztuk37(?int $sztuk37): static
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

    public function getWozek37(): ?int
    {
        return $this->wozek37;
    }

    public function setWozek37(?int $wozek37): static
    {
        $this->wozek37 = $wozek37;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja38 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk38 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena38 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc38 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek38 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa38 = null;

    public function getKompozycja38(): ?Wyceny
    {
        return $this->kompozycja38;
    }

    public function setKompozycja38(?Wyceny $kompozycja38): static
    {
        $this->kompozycja38 = $kompozycja38;

        return $this;
    }

    public function getSztuk38(): ?int
    {
        return $this->sztuk38;
    }

    public function setSztuk38(?int $sztuk38): static
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

    public function getWozek38(): ?int
    {
        return $this->wozek38;
    }

    public function setWozek38(?int $wozek38): static
    {
        $this->wozek38 = $wozek38;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja39 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk39 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena39 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc39 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek39 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa39 = null;

    public function getKompozycja39(): ?Wyceny
    {
        return $this->kompozycja39;
    }

    public function setKompozycja39(?Wyceny $kompozycja39): static
    {
        $this->kompozycja39 = $kompozycja39;

        return $this;
    }

    public function getSztuk39(): ?int
    {
        return $this->sztuk39;
    }

    public function setSztuk39(?int $sztuk39): static
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

    public function getWozek39(): ?int
    {
        return $this->wozek39;
    }

    public function setWozek39(?int $wozek39): static
    {
        $this->wozek39 = $wozek39;

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


    #[ORM\ManyToOne(inversedBy: 'zeszyt', cascade: [])]
    private ?Wyceny $kompozycja40 = null;

    #[ORM\Column(nullable: true)]
    private ?int $sztuk40 = null;

    #[ORM\Column(nullable: true)]
    private ?float $cena40 = null;

    #[ORM\Column(nullable: true)]
    private ?float $wartosc40 = null;

    #[ORM\Column(nullable: true)]
    private ?int $wozek40 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa40 = null;

    #[ORM\Column(nullable: true)]
    private ?float $suma = null;

    public function getKompozycja40(): ?Wyceny
    {
        return $this->kompozycja40;
    }

    public function setKompozycja40(?Wyceny $kompozycja40): static
    {
        $this->kompozycja40 = $kompozycja40;

        return $this;
    }

    public function getSztuk40(): ?int
    {
        return $this->sztuk40;
    }

    public function setSztuk40(?int $sztuk40): static
    {
        $this->sztuk40 = $sztuk40;

        return $this;
    }

    public function getCena40(): ?float
    {
        return $this->cena40;
    }

    public function setCena40(?float $cena40): static
    {
        $this->cena40 = $cena40;

        return $this;
    }

    public function getWartosc40(): ?float
    {
        return $this->wartosc40;
    }

    public function setWartosc40(?float $wartosc40): static
    {
        $this->wartosc40 = $wartosc40;

        return $this;
    }

    public function getWozek40(): ?int
    {
        return $this->wozek40;
    }

    public function setWozek40(?int $wozek40): static
    {
        $this->wozek40 = $wozek40;

        return $this;
    }

    public function getNazwa40(): ?string
    {
        return $this->nazwa40;
    }

    public function setNazwa40(?string $nazwa40): static
    {
        $this->nazwa40 = $nazwa40;

        return $this;
    }

    public function getSuma(): ?float
    {
        return $this->suma;
    }

    public function setSuma(?float $suma): static
    {
        $this->suma = $suma;

        return $this;
    }


    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj1;

    public function getRodzaj1(): ?string
    {
        return $this->rodzaj1;
    }

    public function setRodzaj1(string $rodzaj1): self
    {
        $this->rodzaj1 = $rodzaj1;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj2;

    public function getRodzaj2(): ?string
    {
        return $this->rodzaj2;
    }

    public function setRodzaj2(string $rodzaj2): self
    {
        $this->rodzaj2 = $rodzaj2;
        return $this;
    }
    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj3;

    public function getRodzaj3(): ?string
    {
        return $this->rodzaj3;
    }

    public function setRodzaj3(string $rodzaj3): self
    {
        $this->rodzaj3 = $rodzaj3;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj4;

    public function getRodzaj4(): ?string
    {
        return $this->rodzaj4;
    }

    public function setRodzaj4(string $rodzaj4): self
    {
        $this->rodzaj4 = $rodzaj4;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj5;

    public function getRodzaj5(): ?string
    {
        return $this->rodzaj5;
    }

    public function setRodzaj5(string $rodzaj5): self
    {
        $this->rodzaj5 = $rodzaj5;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj6;

    public function getRodzaj6(): ?string
    {
        return $this->rodzaj6;
    }

    public function setRodzaj6(string $rodzaj6): self
    {
        $this->rodzaj6 = $rodzaj6;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj7;

    public function getRodzaj7(): ?string
    {
        return $this->rodzaj7;
    }

    public function setRodzaj7(string $rodzaj7): self
    {
        $this->rodzaj7 = $rodzaj7;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj8;

    public function getRodzaj8(): ?string
    {
        return $this->rodzaj8;
    }

    public function setRodzaj8(string $rodzaj8): self
    {
        $this->rodzaj8 = $rodzaj8;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj9;

    public function getRodzaj9(): ?string
    {
        return $this->rodzaj9;
    }

    public function setRodzaj9(string $rodzaj9): self
    {
        $this->rodzaj9 = $rodzaj9;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj10;

    public function getRodzaj10(): ?string
    {
        return $this->rodzaj10;
    }

    public function setRodzaj10(string $rodzaj10): self
    {
        $this->rodzaj10 = $rodzaj10;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj11;

    public function getRodzaj11(): ?string
    {
        return $this->rodzaj11;
    }

    public function setRodzaj11(string $rodzaj11): self
    {
        $this->rodzaj11 = $rodzaj11;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj12;

    public function getRodzaj12(): ?string
    {
        return $this->rodzaj12;
    }

    public function setRodzaj12(string $rodzaj12): self
    {
        $this->rodzaj12 = $rodzaj12;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj13;

    public function getRodzaj13(): ?string
    {
        return $this->rodzaj13;
    }

    public function setRodzaj13(string $rodzaj13): self
    {
        $this->rodzaj13 = $rodzaj13;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj14;

    public function getRodzaj14(): ?string
    {
        return $this->rodzaj14;
    }

    public function setRodzaj14(string $rodzaj14): self
    {
        $this->rodzaj14 = $rodzaj14;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj15;

    public function getRodzaj15(): ?string
    {
        return $this->rodzaj15;
    }

    public function setRodzaj15(string $rodzaj15): self
    {
        $this->rodzaj15 = $rodzaj15;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj16;

    public function getRodzaj16(): ?string
    {
        return $this->rodzaj16;
    }

    public function setRodzaj16(string $rodzaj16): self
    {
        $this->rodzaj16 = $rodzaj16;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj17;

    public function getRodzaj17(): ?string
    {
        return $this->rodzaj17;
    }

    public function setRodzaj17(string $rodzaj17): self
    {
        $this->rodzaj17 = $rodzaj17;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj18;

    public function getRodzaj18(): ?string
    {
        return $this->rodzaj18;
    }

    public function setRodzaj18(string $rodzaj18): self
    {
        $this->rodzaj18 = $rodzaj18;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj19;

    public function getRodzaj19(): ?string
    {
        return $this->rodzaj19;
    }

    public function setRodzaj19(string $rodzaj19): self
    {
        $this->rodzaj19 = $rodzaj19;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj20;

    public function getRodzaj20(): ?string
    {
        return $this->rodzaj20;
    }

    public function setRodzaj20(string $rodzaj20): self
    {
        $this->rodzaj20 = $rodzaj20;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj21;

    public function getRodzaj21(): ?string
    {
        return $this->rodzaj21;
    }

    public function setRodzaj21(string $rodzaj21): self
    {
        $this->rodzaj21 = $rodzaj21;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj22;

    public function getRodzaj22(): ?string
    {
        return $this->rodzaj22;
    }

    public function setRodzaj22(string $rodzaj22): self
    {
        $this->rodzaj22 = $rodzaj22;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj23;

    public function getRodzaj23(): ?string
    {
        return $this->rodzaj23;
    }

    public function setRodzaj23(string $rodzaj23): self
    {
        $this->rodzaj23 = $rodzaj23;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj24;

    public function getRodzaj24(): ?string
    {
        return $this->rodzaj24;
    }

    public function setRodzaj24(string $rodzaj24): self
    {
        $this->rodzaj24 = $rodzaj24;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj25;

    public function getRodzaj25(): ?string
    {
        return $this->rodzaj25;
    }

    public function setRodzaj25(string $rodzaj25): self
    {
        $this->rodzaj25 = $rodzaj25;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj26;

    public function getRodzaj26(): ?string
    {
        return $this->rodzaj26;
    }

    public function setRodzaj26(string $rodzaj26): self
    {
        $this->rodzaj26 = $rodzaj26;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj27;

    public function getRodzaj27(): ?string
    {
        return $this->rodzaj27;
    }

    public function setRodzaj27(string $rodzaj27): self
    {
        $this->rodzaj27 = $rodzaj27;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj28;

    public function getRodzaj28(): ?string
    {
        return $this->rodzaj28;
    }

    public function setRodzaj28(string $rodzaj28): self
    {
        $this->rodzaj28 = $rodzaj28;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj29;

    public function getRodzaj29(): ?string
    {
        return $this->rodzaj29;
    }

    public function setRodzaj29(string $rodzaj29): self
    {
        $this->rodzaj29 = $rodzaj29;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj30;

    public function getRodzaj30(): ?string
    {
        return $this->rodzaj30;
    }

    public function setRodzaj30(string $rodzaj30): self
    {
        $this->rodzaj30 = $rodzaj30;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj31;

    public function getRodzaj31(): ?string
    {
        return $this->rodzaj31;
    }

    public function setRodzaj31(string $rodzaj31): self
    {
        $this->rodzaj31 = $rodzaj31;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj32;

    public function getRodzaj32(): ?string
    {
        return $this->rodzaj32;
    }

    public function setRodzaj32(string $rodzaj32): self
    {
        $this->rodzaj32 = $rodzaj32;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj33;

    public function getRodzaj33(): ?string
    {
        return $this->rodzaj33;
    }

    public function setRodzaj33(string $rodzaj33): self
    {
        $this->rodzaj33 = $rodzaj33;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj34;

    public function getRodzaj34(): ?string
    {
        return $this->rodzaj34;
    }

    public function setRodzaj34(string $rodzaj34): self
    {
        $this->rodzaj34 = $rodzaj34;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj35;

    public function getRodzaj35(): ?string
    {
        return $this->rodzaj35;
    }

    public function setRodzaj35(string $rodzaj35): self
    {
        $this->rodzaj35 = $rodzaj35;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj36;

    public function getRodzaj36(): ?string
    {
        return $this->rodzaj36;
    }

    public function setRodzaj36(string $rodzaj36): self
    {
        $this->rodzaj36 = $rodzaj36;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj37;

    public function getRodzaj37(): ?string
    {
        return $this->rodzaj37;
    }

    public function setRodzaj37(string $rodzaj37): self
    {
        $this->rodzaj37 = $rodzaj37;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj38;

    public function getRodzaj38(): ?string
    {
        return $this->rodzaj38;
    }

    public function setRodzaj38(string $rodzaj38): self
    {
        $this->rodzaj38 = $rodzaj38;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj39;

    public function getRodzaj39(): ?string
    {
        return $this->rodzaj39;
    }

    public function setRodzaj39(string $rodzaj39): self
    {
        $this->rodzaj39 = $rodzaj39;
        return $this;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private $rodzaj40;

    #[ORM\ManyToOne]
    private ?User $pracownik = null;

    public function getRodzaj40(): ?string
    {
        return $this->rodzaj40;
    }

    public function setRodzaj40(string $rodzaj40): self
    {
        $this->rodzaj40 = $rodzaj40;
        return $this;
    }

    public function getPracownik(): ?User
    {
        return $this->pracownik;
    }

    public function setPracownik(?User $pracownik): static
    {
        $this->pracownik = $pracownik;

        return $this;
    }


}
