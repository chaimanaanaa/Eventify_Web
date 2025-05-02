<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_offre;

    #[ORM\Column(type: "string", length: 600)]
    #[Assert\NotBlank(message: "The description cannot be empty.")]
    #[Assert\Length(max: 600, maxMessage: "The description cannot exceed {{ limit }} characters")]
    private string $description;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "The subject cannot be empty.")]
    #[Assert\Length(max: 50, maxMessage: "The subject cannot exceed {{ limit }} characters.")]
    private string $objet;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "The status cannot be empty.")]
    #[Assert\Choice(choices: ["pending", "accepted", "rejected"], message: "Statut invalide")]
    private string $statu;

    #[ORM\Column(name:"date_demande",type: "datetime")]
    #[Assert\NotNull(message: "The request date cannot be empty.")]
    private \DateTimeInterface $date_demande;

    #[ORM\Column(name:"type_evenement",type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "The event type cannot be empty.")]
    private ?string $type_evenement = null;

    #[ORM\Column(name:"dateDebutEvenement",type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "The start date cannot be empty.")]
    private ?string $dateDebutEvenement = null;

    #[ORM\Column(name:"dateFinEvenement",type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "The end date cannot be empty.")]
    private ?string $dateFinEvenement = null;

    #[ORM\Column(name:"lieuEvenement",type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "The location cannot be empty.")]
    private ?string $lieuEvenement = null;

    #[ORM\Column(type: "float", nullable: true)]
    #[Assert\NotBlank(message: "The budget cannot be empty.")]
    #[Assert\GreaterThan(value: 0, message: "The budget must be greater than 0.")]
    private ?float $budget = null;

    #[ORM\Column(name:"nombreInvite",type: "integer", nullable: true)]
    #[Assert\NotBlank(message: "The number of guests cannot be empty.")]
    #[Assert\GreaterThan(value: 0, message: "The number of guests must be greater than 0.")]
    private ?int $nombreInvite = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "offres")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Organisateur::class)]
    #[ORM\JoinColumn(name: "id_organisateur", referencedColumnName: "id_organisateur", onDelete: "CASCADE" ,nullable: true)]
    private ?Organisateur $organisateur = null;

    public function __construct()
    {
        $this->date_demande = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id_offre;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getObjet(): string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;
        return $this;
    }

    public function getStatu(): string
    {
        return $this->statu;
    }

    public function setStatu(string $statu): self
    {
        $this->statu = $statu;
        return $this;
    }

    public function getDateDemande(): \DateTimeInterface
    {
        return $this->date_demande;
    }

    public function setDateDemande(\DateTimeInterface $date_demande): self
    {
        $this->date_demande = $date_demande;
        return $this;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->type_evenement;
    }

    public function setTypeEvenement(?string $type_evenement): self
    {
        $this->type_evenement = $type_evenement;
        return $this;
    }

    public function getDateDebutEvenement(): ?string
    {
        return $this->dateDebutEvenement;
    }

    public function setDateDebutEvenement(?string $dateDebutEvenement): self
    {
        $this->dateDebutEvenement = $dateDebutEvenement;
        return $this;
    }

    public function getDateFinEvenement(): ?string
    {
        return $this->dateFinEvenement;
    }

    public function setDateFinEvenement(?string $dateFinEvenement): self
    {
        $this->dateFinEvenement = $dateFinEvenement;
        return $this;
    }

    public function getLieuEvenement(): ?string
    {
        return $this->lieuEvenement;
    }

    public function setLieuEvenement(?string $lieuEvenement): self
    {
        $this->lieuEvenement = $lieuEvenement;
        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    public function getNombreInvite(): ?int
    {
        return $this->nombreInvite;
    }

    public function setNombreInvite(?int $nombreInvite): self
    {
        $this->nombreInvite = $nombreInvite;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    // Alias pour compatibilité
    public function getIdUser(): ?User
    {
        return $this->getUser();
    }

    public function setIdUser(?User $user): self
    {
        return $this->setUser($user);
    }

    public function getOrganisateur(): ?Organisateur
    {
        return $this->organisateur;
    }

    public function setOrganisateur(?Organisateur $organisateur): self
    {
        $this->organisateur = $organisateur;
        return $this;
    }

    // Alias pour compatibilité
    public function getIdOrganisateur(): ?int
    {
        return $this->organisateur?->getId();
    }

    public function setIdOrganisateur(?Organisateur $organisateur): self
    {
        $this->organisateur = $organisateur;
        return $this;
    }
}