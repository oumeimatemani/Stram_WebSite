<?php

namespace App\Entity;

use App\Repository\ServiceContentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceContentRepository::class)]
class ServiceContent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

    #[ORM\Column(length: 255)]
    private ?string $imgOne = null;

    #[ORM\Column(length: 255)]
    private ?string $imgTwo = null;

    #[ORM\Column(length: 255)]
    private ?string $imgThree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgFour = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgFive = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgSix = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detailedDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $AdditionalInformation = null;

    #[ORM\Column(length: 255)]
    private ?string $subTitle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $phrase = null;

    #[ORM\Column(length: 255)]
    private ?string $caracteristicOne = null;

    #[ORM\Column(length: 255)]
    private ?string $caracteristicTwo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caracteristicThree = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Service $service = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getImgOne(): ?string
    {
        return $this->imgOne;
    }

    public function setImgOne(string $imgOne): static
    {
        $this->imgOne = $imgOne;

        return $this;
    }

    public function getImgTwo(): ?string
    {
        return $this->imgTwo;
    }

    public function setImgTwo(string $imgTwo): static
    {
        $this->imgTwo = $imgTwo;

        return $this;
    }

    public function getImgThree(): ?string
    {
        return $this->imgThree;
    }

    public function setImgThree(string $imgThree): static
    {
        $this->imgThree = $imgThree;

        return $this;
    }

    public function getImgFour(): ?string
    {
        return $this->imgFour;
    }

    public function setImgFour(?string $imgFour): static
    {
        $this->imgFour = $imgFour;

        return $this;
    }

    public function getImgFive(): ?string
    {
        return $this->imgFive;
    }

    public function setImgFive(?string $imgFive): static
    {
        $this->imgFive = $imgFive;

        return $this;
    }

    public function getImgSix(): ?string
    {
        return $this->imgSix;
    }

    public function setImgSix(?string $imgSix): static
    {
        $this->imgSix = $imgSix;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getDetailedDescription(): ?string
    {
        return $this->detailedDescription;
    }

    public function setDetailedDescription(string $detailedDescription): static
    {
        $this->detailedDescription = $detailedDescription;

        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->AdditionalInformation;
    }

    public function setAdditionalInformation(?string $AdditionalInformation): static
    {
        $this->AdditionalInformation = $AdditionalInformation;

        return $this;
    }

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(string $subTitle): static
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    public function getPhrase(): ?string
    {
        return $this->phrase;
    }

    public function setPhrase(?string $phrase): static
    {
        $this->phrase = $phrase;

        return $this;
    }

    public function getCaracteristicOne(): ?string
    {
        return $this->caracteristicOne;
    }

    public function setCaracteristicOne(string $caracteristicOne): static
    {
        $this->caracteristicOne = $caracteristicOne;

        return $this;
    }

    public function getCaracteristicTwo(): ?string
    {
        return $this->caracteristicTwo;
    }

    public function setCaracteristicTwo(string $caracteristicTwo): static
    {
        $this->caracteristicTwo = $caracteristicTwo;

        return $this;
    }

    public function getCaracteristicThree(): ?string
    {
        return $this->caracteristicThree;
    }

    public function setCaracteristicThree(?string $caracteristicThree): static
    {
        $this->caracteristicThree = $caracteristicThree;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }
}
