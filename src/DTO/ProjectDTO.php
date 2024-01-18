<?php
namespace App\DTO;

class ProjectDTO
{
    public int $id;
    public string $title;
    public string $description;
    public string $shortDescription;
    public ?string $countryName;
    public array $similarProjects;
    public array $services;

    public function __construct(int $id, string $title, string $description, string $shortDescription, ?string $countryName, array $similarProjects, array $services)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->shortDescription = $shortDescription;
        $this->countryName = $countryName;
        $this->similarProjects = $similarProjects;
        $this->services = $services;
    }

}
