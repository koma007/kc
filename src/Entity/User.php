<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'Podany email jest już zarejestrowany.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\Column(length: 255, nullable: false)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Wyceny::class, mappedBy: 'pracownik')]
    private Collection $pracownik;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $short_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nip = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $street_and_number = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $postal_code = null;

    #[ORM\Column(length: 2, nullable: true)]
    private ?string $country_id = null;

    #[ORM\Column(length: 26, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 45, nullable: true)]
    private ?string $bank_account_number = null;

    public function __construct()
    {
        $this->pracownik = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getAvatarUrl(): ?string
    {
        if (!$this->avatar) {
            return null;
        }
        if (strpos($this->avatar, '/') !== false) {
            return $this->avatar;
        }
        return sprintf('/uploads/avatars/%s', $this->avatar);
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Wyceny>
     */
    public function getPracownik(): Collection
    {
        return $this->pracownik;
    }

    public function addPracownik(Wyceny $pracownik): static
    {
        if (!$this->pracownik->contains($pracownik)) {
            $this->pracownik->add($pracownik);
            $pracownik->addPracownik($this);
        }

        return $this;
    }

    public function removePracownik(Wyceny $pracownik): static
    {
        if ($this->pracownik->removeElement($pracownik)) {
            $pracownik->removePracownik($this);
        }

        return $this;
    }

    public function __toString(){
        return $this->getName();
    }

    public function getShortName(): ?string
    {
        return $this->short_name;
    }

    public function setShortName(?string $short_name): static
    {
        $this->short_name = $short_name;

        return $this;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(?string $nip): static
    {
        $this->nip = $nip;

        return $this;
    }

    public function getStreetAndNumber(): ?string
    {
        return $this->street_and_number;
    }

    public function setStreetAndNumber(?string $street_and_number): static
    {
        $this->street_and_number = $street_and_number;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): static
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->country_id;
    }

    public function setCountryId(?string $country_id): static
    {
        $this->country_id = $country_id;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getBankAccountNumber(): ?string
    {
        return $this->bank_account_number;
    }

    public function setBankAccountNumber(?string $bank_account_number): static
    {
        $this->bank_account_number = $bank_account_number;

        return $this;
    }

}
