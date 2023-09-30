<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: PaysRepository::class)]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPays = null;

    #[ORM\Column(length: 255)]
    private ?string $drapeau = null;



    #[ORM\ManyToOne(targetEntity: Region::class)]
    #[ORM\JoinColumn(name: "region_id", referencedColumnName: "id")]
    private ?Region $region;

    #[ORM\OneToMany(mappedBy: "pays", targetEntity: Contact::class)]
    private Collection $contacts;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(string $nomPays): static
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getDrapeau(): ?string
    {
        return $this->drapeau;
    }

    public function setDrapeau(string $drapeau): static
    {
        $this->drapeau = $drapeau;

        return $this;
    }


    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getContacts(): Collection
    {
        return $this->contacts;
    }
}
