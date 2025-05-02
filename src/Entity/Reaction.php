<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Reaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_reac;

    #[ORM\ManyToOne(targetEntity: Forum::class, inversedBy: "reactions")]
    #[ORM\JoinColumn(name: "id_forum", referencedColumnName: "id_forum", onDelete: "CASCADE")]
    private ?Forum $forum = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "reactions")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $likee = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $dislike = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $nblike = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $nbdislike = null;

    public function getId(): ?int
    {
        return $this->id_reac;
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

    // Alias pour compatibilité
    public function getIdForum(): ?Forum
    {
        return $this->getForum();
    }

    public function setIdForum(?Forum $forum): self
    {
        return $this->setForum($forum);
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

    public function getLikee(): ?int
    {
        return $this->likee;
    }

    public function setLikee(?int $likee): self
    {
        $this->likee = $likee;
        return $this;
    }

    public function getDislike(): ?int
    {
        return $this->dislike;
    }

    public function setDislike(?int $dislike): self
    {
        $this->dislike = $dislike;
        return $this;
    }

    public function getNblike(): ?int
    {
        return $this->nblike;
    }

    public function setNblike(?int $nblike): self
    {
        $this->nblike = $nblike;
        return $this;
    }

    public function getNbdislike(): ?int
    {
        return $this->nbdislike;
    }

    public function setNbdislike(?int $nbdislike): self
    {
        $this->nbdislike = $nbdislike;
        return $this;
    }
}