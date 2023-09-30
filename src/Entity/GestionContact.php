<?php

namespace App\Entity;

use App\Repository\GestionContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GestionContactRepository::class)]
class GestionContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $telTunisie = null;

    #[ORM\Column]
    private ?int $telAlgerie = null;

    #[ORM\Column]
    private ?int $telNiger = null;

    #[ORM\Column]
    private ?int $telBenin = null;

    #[ORM\Column]
    private ?int $telSenegal = null;

    #[ORM\Column(length: 255)]
    private ?string $FaxTunisie = null;

    #[ORM\Column(length: 255)]
    private ?string $FaxAlgerie = null;

    #[ORM\Column(length: 255)]
    private ?string $FaxSenegal = null;

    #[ORM\Column(length: 255)]
    private ?string $FaxNiger = null;

    #[ORM\Column(length: 255)]
    private ?string $FaxBenin = null;

    #[ORM\Column(length: 255)]
    private ?string $EmailTunisie = null;

    #[ORM\Column(length: 255)]
    private ?string $EmailAlgerie = null;

    #[ORM\Column(length: 255)]
    private ?string $EmailNiger = null;

    #[ORM\Column(length: 255)]
    private ?string $EmailSenegal = null;

    #[ORM\Column(length: 255)]
    private ?string $EmailBenin = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseTunisie = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseAlgerie = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseNiger = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseBenin = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseSenegal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelTunisie(): ?int
    {
        return $this->telTunisie;
    }

    public function setTelTunisie(int $telTunisie): static
    {
        $this->telTunisie = $telTunisie;

        return $this;
    }

    public function getTelAlgerie(): ?int
    {
        return $this->telAlgerie;
    }

    public function setTelAlgerie(int $telAlgerie): static
    {
        $this->telAlgerie = $telAlgerie;

        return $this;
    }

    public function getTelNiger(): ?int
    {
        return $this->telNiger;
    }

    public function setTelNiger(int $telNiger): static
    {
        $this->telNiger = $telNiger;

        return $this;
    }

    public function getTelBenin(): ?int
    {
        return $this->telBenin;
    }

    public function setTelBenin(int $telBenin): static
    {
        $this->telBenin = $telBenin;

        return $this;
    }

    public function getTelSenegal(): ?int
    {
        return $this->telSenegal;
    }

    public function setTelSenegal(int $telSenegal): static
    {
        $this->telSenegal = $telSenegal;

        return $this;
    }

    public function getFaxTunisie(): ?string
    {
        return $this->FaxTunisie;
    }

    public function setFaxTunisie(string $FaxTunisie): static
    {
        $this->FaxTunisie = $FaxTunisie;

        return $this;
    }

    public function getFaxAlgerie(): ?string
    {
        return $this->FaxAlgerie;
    }

    public function setFaxAlgerie(string $FaxAlgerie): static
    {
        $this->FaxAlgerie = $FaxAlgerie;

        return $this;
    }

    public function getFaxSenegal(): ?string
    {
        return $this->FaxSenegal;
    }

    public function setFaxSenegal(string $FaxSenegal): static
    {
        $this->FaxSenegal = $FaxSenegal;

        return $this;
    }

    public function getFaxNiger(): ?string
    {
        return $this->FaxNiger;
    }

    public function setFaxNiger(string $FaxNiger): static
    {
        $this->FaxNiger = $FaxNiger;

        return $this;
    }

    public function getFaxBenin(): ?string
    {
        return $this->FaxBenin;
    }

    public function setFaxBenin(string $FaxBenin): static
    {
        $this->FaxBenin = $FaxBenin;

        return $this;
    }

    public function getEmailTunisie(): ?string
    {
        return $this->EmailTunisie;
    }

    public function setEmailTunisie(string $EmailTunisie): static
    {
        $this->EmailTunisie = $EmailTunisie;

        return $this;
    }

    public function getEmailAlgerie(): ?string
    {
        return $this->EmailAlgerie;
    }

    public function setEmailAlgerie(string $EmailAlgerie): static
    {
        $this->EmailAlgerie = $EmailAlgerie;

        return $this;
    }

    public function getEmailNiger(): ?string
    {
        return $this->EmailNiger;
    }

    public function setEmailNiger(string $EmailNiger): static
    {
        $this->EmailNiger = $EmailNiger;

        return $this;
    }

    public function getEmailSenegal(): ?string
    {
        return $this->EmailSenegal;
    }

    public function setEmailSenegal(string $EmailSenegal): static
    {
        $this->EmailSenegal = $EmailSenegal;

        return $this;
    }

    public function getEmailBenin(): ?string
    {
        return $this->EmailBenin;
    }

    public function setEmailBenin(string $EmailBenin): static
    {
        $this->EmailBenin = $EmailBenin;

        return $this;
    }

    public function getAdresseTunisie(): ?string
    {
        return $this->adresseTunisie;
    }

    public function setAdresseTunisie(string $adresseTunisie): static
    {
        $this->adresseTunisie = $adresseTunisie;

        return $this;
    }

    public function getAdresseAlgerie(): ?string
    {
        return $this->adresseAlgerie;
    }

    public function setAdresseAlgerie(string $adresseAlgerie): static
    {
        $this->adresseAlgerie = $adresseAlgerie;

        return $this;
    }

    public function getAdresseNiger(): ?string
    {
        return $this->adresseNiger;
    }

    public function setAdresseNiger(string $adresseNiger): static
    {
        $this->adresseNiger = $adresseNiger;

        return $this;
    }

    public function getAdresseBenin(): ?string
    {
        return $this->adresseBenin;
    }

    public function setAdresseBenin(string $adresseBenin): static
    {
        $this->adresseBenin = $adresseBenin;

        return $this;
    }

    public function getAdresseSenegal(): ?string
    {
        return $this->adresseSenegal;
    }

    public function setAdresseSenegal(string $adresseSenegal): static
    {
        $this->adresseSenegal = $adresseSenegal;

        return $this;
    }
}
