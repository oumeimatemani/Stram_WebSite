<?php
namespace App\DTO;

class SimilarProjectDTO
{
    public int $id;
    public string $title;


    public function __construct(int $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

}
