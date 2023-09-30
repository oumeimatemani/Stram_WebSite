<?php

namespace App\Entity;

use App\Repository\CarriereRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarriereRepository::class)]
class Carriere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeCandidature = null;

    #[ORM\Column(length: 255)]
    private ?string $origineCandidature = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPrenom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseMail = null;

    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column(length: 255)]
    private ?string $lettreMotivation = null;

    #[ORM\Column(length: 255)]
    private ?string $referenceOffre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCandidature(): ?string
    {
        return $this->typeCandidature;
    }

    public function setTypeCandidature(string $typeCandidature): static
    {
        $this->typeCandidature = $typeCandidature;

        return $this;
    }

    public function getOrigineCandidature(): ?string
    {
        return $this->origineCandidature;
    }

    public function setOrigineCandidature(string $origineCandidature): static
    {
        $this->origineCandidature = $origineCandidature;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nomPrenom;
    }

    public function setNomPrenom(string $nomPrenom): static
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    public function getAdresseMail(): ?string
    {
        return $this->adresseMail;
    }

    public function setAdresseMail(string $adresseMail): static
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): static
    {
        $this->cv = $cv;

        return $this;
    }

    public function getLettreMotivation(): ?string
    {
        return $this->lettreMotivation;
    }

    public function setLettreMotivation(string $lettreMotivation): static
    {
        $this->lettreMotivation = $lettreMotivation;

        return $this;
    }

    public function getReferenceOffre(): ?string
    {
        return $this->referenceOffre;
    }

    public function setReferenceOffre(string $referenceOffre): static
    {
        $this->referenceOffre = $referenceOffre;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
