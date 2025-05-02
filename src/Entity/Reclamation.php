<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_rec;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Title cannot be blank")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Title cannot be longer than {{ limit }} characters"
    )]
    private string $titre;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Description cannot be blank")]
    #[Assert\Length(
        min: 10,
        minMessage: "Description must be at least {{ limit }} characters",
        max: 255,
        maxMessage: "Description cannot exceed {{ limit }} characters"
    )]
    private string $sujet;

    #[ORM\Column(name: "img_rec", type: "string", length: 255)]
    private string $img_rec;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\Choice(
        choices: ["Pending", "In Progress", "Resolved"],
        message: "Invalid status. Must be: Pending, In Progress, or Resolved"
    )]
    private string $statu = "Pending"; // Default value

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "reclamations")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: "reclamation", targetEntity: Reponse::class, orphanRemoval: true)]
    private Collection $reponses;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->reponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_rec;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function getSujet(): string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;
        return $this;
    }

    public function getImgRec(): string
    {
        return $this->img_rec;
    }

    public function setImgRec(string $img_rec): self
    {
        $this->img_rec = $img_rec;
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

    /**
     * @return Collection|Reponse[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setReclamation($this);
        }
        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            if ($reponse->getReclamation() === $this) {
                $reponse->setReclamation(null);
            }
        }
        return $this;
    }
}