<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $shortDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $img1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img6 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img7 = null;

    #[ORM\Column(type: 'boolean')]
    private $isPopular = false;


    #[Groups(["country_relationships"])]
    #[ORM\ManyToOne(inversedBy: 'projects')]
    private ?Pays $country = null;

    #[ORM\ManyToMany(targetEntity: Service::class, inversedBy: 'projects')]
    private Collection $services;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $technic6 = null;

    #[Groups(["project_relationships"])]
    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'projects')]
    private Collection $similarProjects;


    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'similarProjects')]
    private Collection $projects;

    public function __construct()
    {
        $this->services = new ArrayCollection();
        $this->similarProjects = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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

    public function getImg1(): ?string
    {
        return $this->img1;
    }

    public function setImg1(string $img1): static
    {
        $this->img1 = $img1;

        return $this;
    }

    public function getImg2(): ?string
    {
        return $this->img2;
    }

    public function setImg2(?string $img2): static
    {
        $this->img2 = $img2;

        return $this;
    }

    public function getImg3(): ?string
    {
        return $this->img3;
    }

    public function setImg3(?string $img3): static
    {
        $this->img3 = $img3;

        return $this;
    }

    public function getImg4(): ?string
    {
        return $this->img4;
    }

    public function setImg4(?string $img4): static
    {
        $this->img4 = $img4;

        return $this;
    }

    public function getImg5(): ?string
    {
        return $this->img5;
    }

    public function setImg5(?string $img5): static
    {
        $this->img5 = $img5;

        return $this;
    }

    public function getImg6(): ?string
    {
        return $this->img6;
    }

    public function setImg6(?string $img6): static
    {
        $this->img6 = $img6;

        return $this;
    }

    public function getImg7(): ?string
    {
        return $this->img7;
    }

    public function setImg7(?string $img7): static
    {
        $this->img7 = $img7;

        return $this;
    }

    public function getCountry(): ?Pays
    {
        return $this->country;
    }

    public function setCountry(?Pays $country): static
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): static
    {
        if (!$this->services->contains($service)) {
            $this->services->add($service);
        }

        return $this;
    }

    public function removeService(Service $service): static
    {
        $this->services->removeElement($service);

        return $this;
    }

    public function getTechnic1(): ?string
    {
        return $this->technic1;
    }

    public function setTechnic1(?string $technic1): static
    {
        $this->technic1 = $technic1;

        return $this;
    }

    public function getTechnic2(): ?string
    {
        return $this->technic2;
    }

    public function setTechnic2(?string $technic2): static
    {
        $this->technic2 = $technic2;

        return $this;
    }

    public function getTechnic3(): ?string
    {
        return $this->technic3;
    }

    public function setTechnic3(?string $technic3): static
    {
        $this->technic3 = $technic3;

        return $this;
    }

    public function getTechnic4(): ?string
    {
        return $this->technic4;
    }

    public function setTechnic4(?string $technic4): static
    {
        $this->technic4 = $technic4;

        return $this;
    }

    public function getTechnic5(): ?string
    {
        return $this->technic5;
    }

    public function setTechnic5(?string $technic5): static
    {
        $this->technic5 = $technic5;

        return $this;
    }

    public function getTechnic6(): ?string
    {
        return $this->technic6;
    }

    public function setTechnic6(?string $technic6): static
    {
        $this->technic6 = $technic6;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getSimilarProjects(): Collection
    {
        return $this->similarProjects;
    }

    public function addSimilarProject(self $similarProject): static
    {
        if (!$this->similarProjects->contains($similarProject)) {
            $this->similarProjects->add($similarProject);
        }

        return $this;
    }

    public function removeSimilarProject(self $similarProject): static
    {
        $this->similarProjects->removeElement($similarProject);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(self $project): static
    {
        if (!$this->projects->contains($project)) {
            $this->projects->add($project);
            $project->addSimilarProject($this);
        }

        return $this;
    }

    public function removeProject(self $project): static
    {
        if ($this->projects->removeElement($project)) {
            $project->removeSimilarProject($this);
        }

        return $this;
    }


    public function getIsPopular(): bool
    {
        return $this->isPopular;
    }

    public function setIsPopular(bool $isPopular): self
    {
        $this->isPopular = $isPopular;

        return $this;
    }
}
