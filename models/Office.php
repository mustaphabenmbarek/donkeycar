<?php

class Office
{
    private int $id;
    private string $adress;
    private int $postal_code;
    private string $city;
    
    public function __construct(int $id, string $adress, int $postal_code, string $city)
    {
        $this->id = $id;
        $this->adress = $adress;
        $this->postal_code = $postal_code;
        $this->city = $city;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    public function getCity(): string
    {
        return $this->city;
    }

}