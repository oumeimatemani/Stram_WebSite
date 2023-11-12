<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $orderInList = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'subServices')]
    private ?self $service = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: self::class)]
    private Collection $subServices;

    public function __construct()
    {
        $this->subServices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getOrderInList(): ?int
    {
        return $this->orderInList;
    }

    public function setOrderInList(int $orderInList): static
    {
        $this->orderInList = $orderInList;

        return $this;
    }

    public function getService(): ?self
    {
        return $this->service;
    }

    public function setService(?self $service): static
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getSubServices(): Collection
    {
        return $this->subServices;
    }

    public function addSubService(self $subService): static
    {
        if (!$this->subServices->contains($subService)) {
            $this->subServices->add($subService);
            $subService->setService($this);
        }

        return $this;
    }

    public function removeSubService(self $subService): static
    {
        if ($this->subServices->removeElement($subService)) {
            // set the owning side to null (unless already changed)
            if ($subService->getService() === $this) {
                $subService->setService(null);
            }
        }

        return $this;
    }
}
