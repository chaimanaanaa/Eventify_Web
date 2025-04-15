<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_cmn;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le sujet ne peut pas être vide")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "Le sujet doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le sujet ne peut pas dépasser {{ limit }} caractères"
    )]
    private string $sujet;
    #[ORM\Column(name:"nbComment",type: "integer")]
    private int $nbComment;

    #[ORM\ManyToOne(targetEntity: Forum::class, inversedBy: "comments")]
    #[ORM\JoinColumn(name: "id_forum", referencedColumnName: "id_forum", onDelete: "CASCADE")]
    private ?Forum $forum = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "comments")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getIdCmn(): ?int
    {
        return $this->id_cmn;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;
        return $this;
    }

    public function getNbComment(): ?int
    {
        return $this->nbComment;
    }

    public function setNbComment(int $nbComment): self
    {
        $this->nbComment = $nbComment;
        return $this;
    }

    public function getForum(): ?Forum
    {
        return $this->forum;
    }

    public function setForum(?Forum $forum): self
    {
        $this->forum = $forum;
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
}