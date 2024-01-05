<?php

namespace App\DTO;
class JobDTO
{
    private ?int $id = null;
    private ?string $ref = null;
    private ?string $title = null;
    private ?string $description = null;
    private ?string $shortDescription = null;
    private ?string $requirment1 = null;
    private ?string $requirment2 = null;
    private ?string $requirment3 = null;
    private ?string $requirment4 = null;
    private ?string $requirment5 = null;
    


    public function __construct(Job $job)
    {
        $this->id = $job->getId();
        $this->ref = $job->getRef();
        $this->title = $job->getTitle();
        $this->shortdescription = $job->getShortDescription();
        $this->description = $job->getDescription();
        $this->requirment1 = $job->getRequirment1();
        $this->requirment2 = $job->getRequirment2();
        $this->requirment3 = $job->getRequirment3();
        $this->requirment4 = $job->getRequirment4();
        $this->requirment5 = $job->getRequirment5();
    }

    // Getters for properties
    // ...
}
