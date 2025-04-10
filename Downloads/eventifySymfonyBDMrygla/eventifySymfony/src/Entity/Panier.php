<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_panier;

    #[ORM\ManyToOne(targetEntity: Logistique::class, inversedBy: "paniers")]
    #[ORM\JoinColumn(name: "id_log", referencedColumnName: "id_log", onDelete: "CASCADE")]
    private ?Logistique $logistique = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "paniers")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\Column(type: "float")]
    private float $prix;

    #[ORM\Column(type: "string", length: 250)]
    private string $name;

    #[ORM\Column(type: "string", length: 250)]
    private string $img;

    public function getId(): ?int
    {
        return $this->id_panier;
    }

    public function getLogistique(): ?Logistique
    {
        return $this->logistique;
    }

    public function setLogistique(?Logistique $logistique): self
    {
        $this->logistique = $logistique;
        return $this;
    }

    // Alias pour compatibilité
    public function getIdLog(): ?Logistique
    {
        return $this->getLogistique();
    }

    public function setIdLog(?Logistique $logistique): self
    {
        return $this->setLogistique($logistique);
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

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;
        return $this;
    }
}