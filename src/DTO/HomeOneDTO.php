<?php

namespace App\DTO;

class HomeOneDTO
{
    private ?int $id;
    private ?string $bigTitle;
    private ?string $subDescription;
    private ?string $SecondBigTitle;
    private ?string $orangeTitle;
    private ?string $secondSubDescription;
    private ?string $smallTitle;
    private ?string $smallDescription;
    private ?string $secondSmallTitle;
    private ?string $secondSmallDescription;
    private ?string $service1Id;
    private ?string $service1Name;
    private ?string $service2Id;
    private ?string $service2Name;
    private ?string $service3Id;
    private ?string $service3Name;


    public function __construct(?int $id,
     ?string $bigTitle ,
     ?string $subDescription,
     ?string $SecondBigTitle,
     ?string $orangeTitle,
     ?string $secondSubDescription,
     ?string $smallTitle,
     ?string $smallDescription,
     ?string $secondSmallTitle,
     ?string $secondSmallDescription,
     ?string $service1Id,
     ?string $service2Id,
     ?string $service3Id,
     ?string $service1Name,
     ?string $service2Name,
     ?string $service3Name
     )
    {
        $this->id = $id;
        $this->bigTitle = $bigTitle;
        $this->subDescription = $subDescription;
        $this->SecondBigTitle = $SecondBigTitle;
        $this->orangeTitle = $orangeTitle;
        $this->secondSubDescription = $secondSubDescription;
        $this->smallTitle = $smallTitle;
        $this->smallDescription = $smallDescription;
        $this->secondSmallTitle = $secondSmallTitle;
        $this->secondSmallDescription = $secondSmallDescription;
        $this->service1Id = $service1Id;
        $this->service2Id= $service2Id;
        $this->service3Id = $service3Id;
        $this->service1Name = $service1Name;
        $this->service2Name= $service2Name;
        $this->service3Name = $service3Name;
    }

    // Add getters for the properties...

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'bigTitle' => $this->bigTitle,
            'subDescription'=> $this->subDescription,
            'SecondBigTitle'=> $this->SecondBigTitle ,
            'orangeTitle'=> $this->orangeTitle ,
            'secondSubDescription'=> $this->secondSubDescription ,
            'smallTitle'=> $this->smallTitle ,
            'smallDescription'=> $this->smallDescription ,
            'secondSmallTitle'=> $this->secondSmallTitle ,
            'secondSmallDescription'=> $this->secondSmallDescription ,
            'service1'=> ['id'=> $this->service1Id , 'name'=>$this->service1Name] ,
            'service2'=> ['id'=> $this->service2Id , 'name'=>$this->service2Name] ,
            'service3'=> ['id'=> $this->service3Id , 'name'=>$this->service3Name] 
        ];
    }
}
