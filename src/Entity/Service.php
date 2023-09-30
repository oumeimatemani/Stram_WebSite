<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionService = null;

    #[ORM\Column(length: 255)]
    private ?string $imageService = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptionService(): ?string
    {
        return $this->descriptionService;
    }

    public function setDescriptionService(string $descriptionService): static
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    public function getImageService(): ?string
    {
        return $this->imageService;
    }

    public function setImageService(string $imageService): static
    {
        $this->imageService = $imageService;

        return $this;
    }
}
