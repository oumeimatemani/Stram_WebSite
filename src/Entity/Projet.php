<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;



    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToMany(targetEntity: Metier::class, inversedBy: 'projets')]
    private Collection $metiers;

    #[ORM\Column(length: 255)]
    private ?string $Gallerie = null;

    #[ORM\Column(length: 255)]
    private ?string $proprietaire = null;




    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $afficherProjet = false;

    public function __construct()
    {
        $this->metiers = new ArrayCollection(); // Uncomment this line

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getGallerie(): ?string
    {
        return $this->Gallerie;
    }

    public function setGallerie(string $Gallerie): static
    {
        $this->Gallerie = $Gallerie;

        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): static
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }


    public function getAfficherProjet(): ?bool
    {
        return $this->afficherProjet;
    }

    public function setAfficherProjet(?bool $afficherProjet): static
    {
        $this->afficherProjet = $afficherProjet;
        return $this;
    }

    public function getMetiers(): Collection
    {
        return $this->metiers;
    }

    public function addMetier(Metier $metier): self
    {
        if (!$this->metiers->contains($metier)) {
            $this->metiers[] = $metier;
        }

        return $this;
    }

    public function removeMetier(Metier $metier): self
    {
        $this->metiers->removeElement($metier);

        return $this;
    }
}
