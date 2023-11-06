<?php

namespace App\Entity;

use App\Repository\HomeTwoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeTwoRepository::class)]
class HomeTwo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $orangeTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $bigTitle = null;

    #[ORM\Column]
    private ?int $yearsNumber = null;

    #[ORM\Column]
    private ?int $projectsNumber = null;

    #[ORM\Column]
    private ?int $experts = null;

    #[ORM\Column]
    private ?int $inProgressProjects = null;

    #[ORM\Column(length: 255)]
    private ?string $sector1 = null;

    #[ORM\Column(length: 255)]
    private ?string $sector2 = null;

    #[ORM\Column(length: 255)]
    private ?string $sector3 = null;

    #[ORM\Column(length: 255)]
    private ?string $sector4 = null;

    #[ORM\Column(length: 255)]
    private ?string $sector5 = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBigTitle(): ?string
    {
        return $this->bigTitle;
    }

    public function setBigTitle(string $bigTitle): static
    {
        $this->bigTitle = $bigTitle;

        return $this;
    }

    public function getYearsNumber(): ?int
    {
        return $this->yearsNumber;
    }

    public function setYearsNumber(int $yearsNumber): static
    {
        $this->yearsNumber = $yearsNumber;

        return $this;
    }

    public function getProjectsNumber(): ?int
    {
        return $this->projectsNumber;
    }

    public function setProjectsNumber(int $projectsNumber): static
    {
        $this->projectsNumber = $projectsNumber;

        return $this;
    }

    public function getExperts(): ?int
    {
        return $this->experts;
    }

    public function setExperts(int $experts): static
    {
        $this->experts = $experts;

        return $this;
    }

    public function getInProgressProjects(): ?int
    {
        return $this->inProgressProjects;
    }

    public function setInProgressProjects(int $inProgressProjects): static
    {
        $this->inProgressProjects = $inProgressProjects;

        return $this;
    }

    public function getSector1(): ?string
    {
        return $this->sector1;
    }

    public function setSector1(string $sector1): static
    {
        $this->sector1 = $sector1;

        return $this;
    }

    public function getSector2(): ?string
    {
        return $this->sector2;
    }

    public function setSector2(string $sector2): static
    {
        $this->sector2 = $sector2;

        return $this;
    }

    public function getSector3(): ?string
    {
        return $this->sector3;
    }

    public function setSector3(string $sector3): static
    {
        $this->sector3 = $sector3;

        return $this;
    }

    public function getSector4(): ?string
    {
        return $this->sector4;
    }

    public function setSector4(string $sector4): static
    {
        $this->sector4 = $sector4;

        return $this;
    }

    public function getSector5(): ?string
    {
        return $this->sector5;
    }

    public function setSector5(string $sector5): static
    {
        $this->sector5 = $sector5;

        return $this;
    }
}
