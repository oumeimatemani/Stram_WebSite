<?php

namespace App\Entity;

use App\Repository\AcceuilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcceuilRepository::class)]
class Acceuil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numrContact = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionSite1 = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionSite2 = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionEntreprise1 = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionEntreprise2 = null;

    #[ORM\Column(length: 255)]
    private ?string $objectifs = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionExperiences = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionProjet1 = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionProjet2 = null;

    #[ORM\Column(length: 255)]
    private ?string $drapeaux = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionTemoignages = null;

    #[ORM\Column(length: 255)]
    private ?string $TemoignagesClients = null;

    #[ORM\Column(length: 255)]
    private ?string $TitreNouveautées = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionNouveautées = null;

    #[ORM\Column(length: 255)]
    private ?string $nouveautées = null;

    #[ORM\Column(length: 255)]
    private ?string $LogoPartenaires = null;

    #[ORM\Column(length: 255)]
    private ?string $DescriptionSTram = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseContact = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumrContact(): ?int
    {
        return $this->numrContact;
    }

    public function setNumrContact(int $numrContact): static
    {
        $this->numrContact = $numrContact;

        return $this;
    }

    public function getDescriptionSite1(): ?string
    {
        return $this->descriptionSite1;
    }

    public function setDescriptionSite1(string $descriptionSite1): static
    {
        $this->descriptionSite1 = $descriptionSite1;

        return $this;
    }

    public function getDescriptionSite2(): ?string
    {
        return $this->descriptionSite2;
    }

    public function setDescriptionSite2(string $descriptionSite2): static
    {
        $this->descriptionSite2 = $descriptionSite2;

        return $this;
    }

    public function getDescriptionEntreprise1(): ?string
    {
        return $this->DescriptionEntreprise1;
    }

    public function setDescriptionEntreprise1(string $DescriptionEntreprise1): static
    {
        $this->DescriptionEntreprise1 = $DescriptionEntreprise1;

        return $this;
    }

    public function getDescriptionEntreprise2(): ?string
    {
        return $this->DescriptionEntreprise2;
    }

    public function setDescriptionEntreprise2(string $DescriptionEntreprise2): static
    {
        $this->DescriptionEntreprise2 = $DescriptionEntreprise2;

        return $this;
    }

    public function getObjectifs(): ?string
    {
        return $this->objectifs;
    }

    public function setObjectifs(string $objectifs): static
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    public function getDescriptionExperiences(): ?string
    {
        return $this->DescriptionExperiences;
    }

    public function setDescriptionExperiences(string $DescriptionExperiences): static
    {
        $this->DescriptionExperiences = $DescriptionExperiences;

        return $this;
    }

    public function getDescriptionProjet1(): ?string
    {
        return $this->DescriptionProjet1;
    }

    public function setDescriptionProjet1(string $DescriptionProjet1): static
    {
        $this->DescriptionProjet1 = $DescriptionProjet1;

        return $this;
    }

    public function getDescriptionProjet2(): ?string
    {
        return $this->DescriptionProjet2;
    }

    public function setDescriptionProjet2(string $DescriptionProjet2): static
    {
        $this->DescriptionProjet2 = $DescriptionProjet2;

        return $this;
    }

    public function getDrapeaux(): ?string
    {
        return $this->drapeaux;
    }

    public function setDrapeaux(string $drapeaux): static
    {
        $this->drapeaux = $drapeaux;

        return $this;
    }

    public function getDescriptionTemoignages(): ?string
    {
        return $this->DescriptionTemoignages;
    }

    public function setDescriptionTemoignages(string $DescriptionTemoignages): static
    {
        $this->DescriptionTemoignages = $DescriptionTemoignages;

        return $this;
    }

    public function getTemoignagesClients(): ?string
    {
        return $this->TemoignagesClients;
    }

    public function setTemoignagesClients(string $TemoignagesClients): static
    {
        $this->TemoignagesClients = $TemoignagesClients;

        return $this;
    }

    public function getTitreNouveautées(): ?string
    {
        return $this->TitreNouveautées;
    }

    public function setTitreNouveautées(string $TitreNouveautées): static
    {
        $this->TitreNouveautées = $TitreNouveautées;

        return $this;
    }

    public function getDescriptionNouveautées(): ?string
    {
        return $this->descriptionNouveautées;
    }

    public function setDescriptionNouveautées(string $descriptionNouveautées): static
    {
        $this->descriptionNouveautées = $descriptionNouveautées;

        return $this;
    }

    public function getNouveautées(): ?string
    {
        return $this->nouveautées;
    }

    public function setNouveautées(string $nouveautées): static
    {
        $this->nouveautées = $nouveautées;

        return $this;
    }

    public function getLogoPartenaires(): ?string
    {
        return $this->LogoPartenaires;
    }

    public function setLogoPartenaires(string $LogoPartenaires): static
    {
        $this->LogoPartenaires = $LogoPartenaires;

        return $this;
    }

    public function getDescriptionSTram(): ?string
    {
        return $this->DescriptionSTram;
    }

    public function setDescriptionSTram(string $DescriptionSTram): static
    {
        $this->DescriptionSTram = $DescriptionSTram;

        return $this;
    }

    public function getAdresseContact(): ?string
    {
        return $this->adresseContact;
    }

    public function setAdresseContact(string $adresseContact): static
    {
        $this->adresseContact = $adresseContact;

        return $this;
    }
}
