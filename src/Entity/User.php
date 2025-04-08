<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id_user",type: "integer")]
    private int $id_user;

    #[ORM\Column(name:"firstName",type: "string", length: 30)]
    private string $firstName;

    #[ORM\Column(name:"lastName",type: "string", length: 30)]
    private string $lastName;

    #[ORM\Column(name:"cin",type: "string", length: 10)]
    private string $cin;

    #[ORM\Column(name:"email",type: "string", length: 50)]
    private string $email;

    #[ORM\Column(name:"numTlf",type: "string", length: 20)]
    private string $numTlf;

    #[ORM\Column(name:"genre",type: "string", length: 10)]
    private string $genre;

    #[ORM\Column(name:"mdp",type: "string", length: 80)]
    private string $mdp;

    #[ORM\Column(name:"dateNaissance",type: "date")]
    private \DateTimeInterface $dateNaissance;

    #[ORM\Column(name:"role",type: "string", length: 30)]
    private string $role;

    #[ORM\Column(name:"img",type: "string", length: 255, nullable: true)]
    private ?string $img = null;

    #[ORM\Column(name:"blocked",type: "integer")]
    private int $blocked = 0;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Forum::class)]
    private Collection $forums;
    #[ORM\OneToMany(mappedBy: "user", targetEntity: Offre::class)]
    private Collection $offres;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Organisateur::class)]
    private Collection $organisateurs;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Reclamation::class)]
    private Collection $reclamations;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Panier::class)]
    private Collection $paniers;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Reaction::class)]
    private Collection $reactions;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Reponse::class)]
    private Collection $reponses;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->forums = new ArrayCollection();
        $this->offres = new ArrayCollection();
        $this->organisateurs = new ArrayCollection();
        $this->reclamations = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->reactions = new ArrayCollection();
        $this->reponses = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_user;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getCin(): string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getNumTlf(): string
    {
        return $this->numTlf;
    }

    public function setNumTlf(string $numTlf): self
    {
        $this->numTlf = $numTlf;
        return $this;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;
        return $this;
    }

    public function getDateNaissance(): \DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    public function getBlocked(): int
    {
        return $this->blocked;
    }

    public function setBlocked(int $blocked): self
    {
        $this->blocked = $blocked;
        return $this;
    }

    // Relations
    public function getForums(): Collection
    {
        return $this->forums;
    }

    public function addForum(Forum $forum): self
    {
        if (!$this->forums->contains($forum)) {
            $this->forums[] = $forum;
            $forum->setUser($this);
        }
        return $this;
    }

    public function removeForum(Forum $forum): self
    {
        if ($this->forums->removeElement($forum)) {
            if ($forum->getUser() === $this) {
                $forum->setUser(null);
            }
        }
        return $this;
    }

    public function getOffres(): Collection
    {
        return $this->offres;
    }

    public function addOffre(Offre $offre): self
    {
        if (!$this->offres->contains($offre)) {
            $this->offres[] = $offre;
            $offre->setUser($this);
        }
        return $this;
    }

    public function removeOffre(Offre $offre): self
    {
        if ($this->offres->removeElement($offre)) {
            if ($offre->getUser() === $this) {
                $offre->setUser(null);
            }
        }
        return $this;
    }

    public function getOrganisateurs(): Collection
    {
        return $this->organisateurs;
    }

    public function addOrganisateur(Organisateur $organisateur): self
    {
        if (!$this->organisateurs->contains($organisateur)) {
            $this->organisateurs[] = $organisateur;
            $organisateur->setUser($this);
        }
        return $this;
    }

    public function removeOrganisateur(Organisateur $organisateur): self
    {
        if ($this->organisateurs->removeElement($organisateur)) {
            if ($organisateur->getUser() === $this) {
                $organisateur->setUser(null);
            }
        }
        return $this;
    }

    // Ajoutez les autres méthodes de relation de la même manière...
    // (getReclamations(), addReclamation(), removeReclamation(), etc.)
}