<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ref = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requirment1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requirment2 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requirment3 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requirment4 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $requirment5 = null;

    #[ORM\OneToMany(mappedBy: 'job', targetEntity: Carriere::class)]
    private Collection $candidates;

    #[ORM\Column(nullable: true)]
    private ?bool $isHide = null;

    public function __construct()
    {
        $this->candidates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): static
    {
        $this->ref = $ref;

        return $this;
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

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): static
    {
        $this->shortDescription = $shortDescription;

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

    public function getRequirment1(): ?string
    {
        return $this->requirment1;
    }

    public function setRequirment1(?string $requirment1): static
    {
        $this->requirment1 = $requirment1;

        return $this;
    }

    public function getRequirment2(): ?string
    {
        return $this->requirment2;
    }

    public function setRequirment2(?string $requirment2): static
    {
        $this->requirment2 = $requirment2;

        return $this;
    }

    public function getRequirment3(): ?string
    {
        return $this->requirment3;
    }

    public function setRequirment3(?string $requirment3): static
    {
        $this->requirment3 = $requirment3;

        return $this;
    }

    public function getRequirment4(): ?string
    {
        return $this->requirment4;
    }

    public function setRequirment4(?string $requirment4): static
    {
        $this->requirment4 = $requirment4;

        return $this;
    }

    public function getRequirment5(): ?string
    {
        return $this->requirment5;
    }

    public function setRequirment5(?string $requirment5): static
    {
        $this->requirment5 = $requirment5;

        return $this;
    }

    /**
     * @return Collection<int, Carriere>
     */
    public function getCandidates(): Collection
    {
        return $this->candidates;
    }

    public function addCandidate(Carriere $candidate): static
    {
        if (!$this->candidates->contains($candidate)) {
            $this->candidates->add($candidate);
            $candidate->setJob($this);
        }

        return $this;
    }

    public function removeCandidate(Carriere $candidate): static
    {
        if ($this->candidates->removeElement($candidate)) {
            // set the owning side to null (unless already changed)
            if ($candidate->getJob() === $this) {
                $candidate->setJob(null);
            }
        }

        return $this;
    }

    public function isIsHide(): ?bool
    {
        return $this->isHide;
    }

    public function setIsHide(?bool $isHide): static
    {
        $this->isHide = $isHide;

        return $this;
    }
}
