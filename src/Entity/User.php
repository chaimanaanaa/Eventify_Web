<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_user", type: "integer")]
    private int $id_user;

    #[ORM\Column(name: "firstName", type: "string", length: 30)]
    #[Assert\NotBlank(message: "First name is required.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z ]+$/",
        message: "First name must contain only letters."
    )]
    #[Assert\Length(
        max: 30,
        maxMessage: "First name cannot exceed {{ limit }} characters."
    )]
    private string $firstName;

    #[ORM\Column(name: "lastName", type: "string", length: 30)]
    #[Assert\NotBlank(message: "First name is required.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z ]+$/",
        message: "First name must contain only letters."
    )]
    #[Assert\Length(
        max: 30,
        maxMessage: "First name cannot exceed {{ limit }} characters."
    )]
    private string $lastName;

    #[ORM\Column(name: "cin", type: "string", length: 10)]
    #[Assert\NotBlank(message: "CIN is required.")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "CIN must be exactly 8 digits."
    )]
    private string $cin;

    #[ORM\Column(name: "email", type: "string", length: 50)]
    #[Assert\NotBlank(message: "Email is required.")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Email cannot exceed {{ limit }} characters."
    )]
    private string $email;

    #[ORM\Column(name: "numTlf", type: "string", length: 20)]
    #[Assert\NotBlank(message: "Phone number is required.")]
    #[Assert\Regex(
        pattern: "/^\+?\d+$/",
        message: "Phone number must be numeric and can only start with '+'."
    )]
    private string $numTlf;

    #[ORM\Column(name: "genre", type: "string", length: 10)]
    #[Assert\NotBlank(message: "Gender is required.")]
    #[Assert\Choice(
        choices: ["male", "female"],
        message: "Choose a valid gender: Male Or Female."
    )]
    private string $genre;


    #[ORM\Column(name: "mdp", type: "string", length: 80)]
    #[Assert\NotBlank(message: "Password is required.")]
    private string $mdp;

    /**
     * Validation personnalisée pour le mot de passe.
     */
    #[Assert\Callback]

    public function validatePassword(ExecutionContextInterface $context): void
    {
        $password = $this->mdp;

        // Débogage : Afficher le mot de passe
        dump($password);

        // Vérifier si le mot de passe est vide
        if (empty($password)) {
            $context->buildViolation('Password is required.')
                ->atPath('mdp')
                ->addViolation();
            return;
        }

        // Vérifier si le mot de passe contient au moins une lettre
        if (!preg_match('/[a-zA-Z]/', $password)) {
            $context->buildViolation('Password must contain at least one letter.')
                ->atPath('mdp')
                ->addViolation();
            return;
        }

        // Vérifier si le mot de passe contient au moins un chiffre
        if (!preg_match('/\d/', $password)) {
            $context->buildViolation('Password must contain at least one number.')
                ->atPath('mdp')
                ->addViolation();
            return;
        }

        // Vérifier si le mot de passe contient au moins un caractère spécial
        if (!preg_match('/[\W_]/', $password)) {
            $context->buildViolation('Password must contain at least one special character.')
                ->atPath('mdp')
                ->addViolation();
            return;
        }

        // Vérifier si le mot de passe a une longueur minimale de 8 caractères
        if (strlen($password) < 8) {
            $context->buildViolation('Password must be at least 8 characters.')
                ->atPath('mdp')
                ->addViolation();
            return;
        }
    }

    #[ORM\Column(name: "dateNaissance", type: "date")]
    #[Assert\NotBlank(message: "Date of birth is required.")]
    #[Assert\LessThan(
        value: "today",
        message: "Date of birth must be in the past."
    )]
    #[Assert\GreaterThan(
        value: "-120 years",
        message: "Date of birth must be realistic."
    )]
    private \DateTimeInterface $dateNaissance;

    #[ORM\Column(name: "role", type: "string", length: 30)]
    #[Assert\NotBlank(message: "Role is required.")]
    #[Assert\Choice(
        choices: ["Client", "Partenaire"],
        message: "Choose a valid role: Client, or Partner."
    )]
    private string $role;

    #[ORM\Column(name: "img", type: "string", length: 255, nullable: true)]
    private ?string $img = null;

    #[ORM\Column(name: "blocked", type: "integer")]
    private int $blocked = 0;
    #[ORM\Column(name: "faceDescriptor", type: "text", nullable: true)]
    private ?string $faceDescriptor = null;


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


     /**
     * @var Collection<int, Logistique>
     */
    #[ORM\OneToMany(targetEntity: Logistique::class, mappedBy: 'user')]
    private Collection $logistiques;





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
        $this->logistiques = new ArrayCollection();

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
    public function getFaceDescriptor(): ?string
    {
        return $this->faceDescriptor;
    }

    public function setFaceDescriptor(?string $faceDescriptor): self
    {
        $this->faceDescriptor = $faceDescriptor;
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



     /**
     * @return Collection<int, Logistique>
     */
    public function getLogistiques(): Collection
    {
        return $this->logistiques;
    }

    public function addLogistique(Logistique $logistique): static
    {
        if (!$this->logistiques->contains($logistique)) {
            $this->logistiques->add($logistique);
            $logistique->setUser($this);
        }

        return $this;
    }

    public function removeLogistique(Logistique $logistique): static
    {
        if ($this->logistiques->removeElement($logistique)) {
            // set the owning side to null (unless already changed)
            if ($logistique->getUser() === $this) {
                $logistique->setUser(null);
            }
        }

        return $this;
    }

    











}
