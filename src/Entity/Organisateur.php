<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Organisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_organisateur;

    #[ORM\Column(name:"imageOrg",type: "string", length: 255)]
    private string $imageOrg;

    #[ORM\Column(name:"nom_org",type: "string", length: 30)]
    private string $nom_org;

    #[ORM\Column(name:"prenom_org",type: "string", length: 30)]
    private string $prenom_org;

    #[ORM\Column(name:"email_org",type: "string", length: 50)]
    private string $email_org;

    #[ORM\Column(name:"num_tel",type: "string", length: 20)]
    private string $num_tel;

    #[ORM\Column(type: "string", length: 50)]
    private string $specialite;

    #[ORM\Column(name:"date_embauche",type: "string", length: 255)]
    private string $date_embauche;

    #[ORM\Column(name:"nbexp",type: "integer")]
    private int $nbexp;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "organisateurs")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $employment = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $skills = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $longuage = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $date_naissance = null;

    #[ORM\Column(type: "float")]
    private float $salaire;

    #[ORM\Column(type: "string", length: 255)]
    private string $statut = 'Available';

    public function getId(): ?int
    {
        return $this->id_organisateur;
    }

    public function getImageOrg(): string
    {
        return $this->imageOrg;
    }

    public function setImageOrg(string $imageOrg): self
    {
        $this->imageOrg = $imageOrg;
        return $this;
    }

    public function getNomOrg(): string
    {
        return $this->nom_org;
    }

    public function setNomOrg(string $nom_org): self
    {
        $this->nom_org = $nom_org;
        return $this;
    }

    public function getPrenomOrg(): string
    {
        return $this->prenom_org;
    }

    public function setPrenomOrg(string $prenom_org): self
    {
        $this->prenom_org = $prenom_org;
        return $this;
    }

    public function getEmailOrg(): string
    {
        return $this->email_org;
    }

    public function setEmailOrg(string $email_org): self
    {
        $this->email_org = $email_org;
        return $this;
    }

    public function getNumTel(): string
    {
        return $this->num_tel;
    }

    public function setNumTel(string $num_tel): self
    {
        $this->num_tel = $num_tel;
        return $this;
    }


    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;
        return $this;
    }

    public function getDateEmbauche(): string
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche(string $date_embauche): self
    {
        $this->date_embauche = $date_embauche;
        return $this;
    }

    public function getNbexp(): int
    {
        return $this->nbexp;
    }

    public function setNbexp(int $nbexp): self
    {
        $this->nbexp = $nbexp;
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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getEmployment(): ?string
    {
        return $this->employment;
    }

    public function setEmployment(?string $employment): self
    {
        $this->employment = $employment;
        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;
        return $this;
    }

    public function getLonguage(): ?string
    {
        return $this->longuage;
    }

    public function setLonguage(?string $longuage): self
    {
        $this->longuage = $longuage;
        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?string $date_naissance): self
    {
        $this->date_naissance = $date_naissance;
        return $this;
    }

    public function getSalaire(): float
    {
        return $this->salaire;
    }


    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }
}