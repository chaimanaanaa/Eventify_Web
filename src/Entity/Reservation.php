<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $idRes;

    #[ORM\Column(type: "datetime", columnDefinition: "TIMESTAMP DEFAULT CURRENT_TIMESTAMP")]
    private \DateTimeInterface $date;



    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id_user", onDelete: "CASCADE")]
    private ?User $user = null;
   
    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: "id_event", referencedColumnName: "id_event", onDelete: "CASCADE")]
    private ?Event $event = null;
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->idRes;
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

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;
        return $this;
    }

    // Alias pour compatibilité
    public function getIdEvent(): ?Event
    {
        return $this->getEvent();
    }

    public function setIdEvent(?Event $event): self
    {
        return $this->setEvent($event);
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
}