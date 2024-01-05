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
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column]
    private ?bool $isPosteOffer = null;

    #[ORM\Column(length: 255)]
    private ?string $cv = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $motivationLetter = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'candidates')]
    private ?Job $job = null;

   





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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function isPosteOffer(): ?bool
    {
        return $this->isPosteOffer;
    }

    public function setIsPosteOffer(bool $type): static
    {
        $this->isPosteOffer = $type;

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

    public function getMotivationLetter(): ?string
    {
        return $this->motivationLetter;
    }

    public function setMotivationLetter(?string $motivationLetter): static
    {
        $this->motivationLetter = $motivationLetter;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getJob(): ?Job
    {
        return $this->job;
    }

    public function setJob(?Job $job): static
    {
        $this->job = $job;

        return $this;
    }

  
}
