<?php

namespace App\Entity;

use App\Repository\HomeOneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeOneRepository::class)]
class HomeOne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bigTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $subDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $serviceOne = null;

    #[ORM\Column(length: 255)]
    private ?string $SecondBigTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $orangeTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $secondSubDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $smallTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $smallDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $secondSmallTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $secondSmallDescription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBigTitle(): ?string
    {
        return $this->bigTitle;
    }

    public function setBigTitle(string $bigTitle): static
    {
        $this->bigTitle = $bigTitle;

        return $this;
    }

    public function getSubDescription(): ?string
    {
        return $this->subDescription;
    }

    public function setSubDescription(string $subDescription): static
    {
        $this->subDescription = $subDescription;

        return $this;
    }

    public function getServiceOne(): ?string
    {
        return $this->serviceOne;
    }

    public function setServiceOne(?string $serviceOne): static
    {
        $this->serviceOne = $serviceOne;

        return $this;
    }

    public function getSecondBigTitle(): ?string
    {
        return $this->SecondBigTitle;
    }

    public function setSecondBigTitle(string $SecondBigTitle): static
    {
        $this->SecondBigTitle = $SecondBigTitle;

        return $this;
    }

    public function getOrangeTitle(): ?string
    {
        return $this->orangeTitle;
    }

    public function setOrangeTitle(string $orangeTitle): static
    {
        $this->orangeTitle = $orangeTitle;

        return $this;
    }

    public function getSecondSubDescription(): ?string
    {
        return $this->secondSubDescription;
    }

    public function setSecondSubDescription(string $secondSubDescription): static
    {
        $this->secondSubDescription = $secondSubDescription;

        return $this;
    }

    public function getSmallTitle(): ?string
    {
        return $this->smallTitle;
    }

    public function setSmallTitle(string $smallTitle): static
    {
        $this->smallTitle = $smallTitle;

        return $this;
    }

    public function getSmallDescription(): ?string
    {
        return $this->smallDescription;
    }

    public function setSmallDescription(string $smallDescription): static
    {
        $this->smallDescription = $smallDescription;

        return $this;
    }

    public function getSecondSmallTitle(): ?string
    {
        return $this->secondSmallTitle;
    }

    public function setSecondSmallTitle(string $secondSmallTitle): static
    {
        $this->secondSmallTitle = $secondSmallTitle;

        return $this;
    }

    public function getSecondSmallDescription(): ?string
    {
        return $this->secondSmallDescription;
    }

    public function setSecondSmallDescription(string $secondSmallDescription): static
    {
        $this->secondSmallDescription = $secondSmallDescription;

        return $this;
    }
}
