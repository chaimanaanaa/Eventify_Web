<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_rep;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "The response text cannot be blank.")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: "The response text must be at least {{ limit }} characters long.",
        maxMessage: "The response text cannot exceed {{ limit }} characters."
    )]
    private string $text;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "reponses")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: "reponses")]
    #[ORM\JoinColumn(name: "id_rec", referencedColumnName: "id_rec", onDelete: "CASCADE")]
    private ?Reclamation $reclamation = null;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id_rep;
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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
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

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    // Alias pour compatibilité
    public function getIdRec(): ?Reclamation
    {
        return $this->getReclamation();
    }

    public function setIdRec(?Reclamation $reclamation): self
    {
        return $this->setReclamation($reclamation);
    }
}