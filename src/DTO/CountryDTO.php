<?php
namespace App\DTO;

class CountryDTO
{
    public int $id;
    public string $countryName;
    public string $countryCode;

    public function __construct(int $id, string $countryName, string $countryCode)
    {
        $this->id = $id;
        $this->countryName = $countryName;
        $this->countryCode = $countryCode;
    }
}
