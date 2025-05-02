<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_event;
 
    #[ORM\Column(type: "date")]
    #[Assert\NotBlank(message: "La date est obligatoire.")]
    #[Assert\GreaterThanOrEqual(
    value: "today",
    message: "La date doit être supérieure ou égale à aujourd'hui."
)]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "string", length: 50)]
    private string $lieu;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]

    private string $description;

    #[ORM\Column(type: "string", length: 20)]
    private string $type;

    #[ORM\Column(name:"nbInvite",type: "integer")]
    #[Assert\Positive(message: "Le nombre d'invités doit être un nombre positif.")]
    private int $nbInvite;

    #[ORM\Column(type: "string", length: 20)]
    private string $categorie;

    #[ORM\Column(name:"prixEstime",type: "float")]
    #[Assert\Positive(message: "Le prix estimé doit être un nombre positif.")]

    private float $prixEstime;

    #[ORM\Column(name:"imageven",type: "string", length: 255)]
    private string $imageven;

    #[ORM\OneToMany(mappedBy: "event", targetEntity: Reservation::class)]
private Collection $reservations;

public function __construct()
{
    $this->reservations = new ArrayCollection();
}

    public function getIdEvent(): ?int
    {
        return $this->id_event;
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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getNbInvite(): ?int
    {
        return $this->nbInvite;
    }

    public function setNbInvite(int $nbInvite): self
    {
        $this->nbInvite = $nbInvite;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getPrixEstime(): ?float
    {
        return $this->prixEstime;
    }

    public function setPrixEstime(float $prixEstime): self
    {
        $this->prixEstime = $prixEstime;
        return $this;
    }

    public function getImageven(): ?string
    {
        return $this->imageven;
    }

    public function setImageven(string $imageven): self
    {
        $this->imageven = $imageven;
        return $this;
    }

    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setIdEvent($this);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getEvent() === $this) {
                $reservation->setEvent(null);
            }
        }
        return $this;
    }
}