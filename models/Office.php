<?php

class Office
{
    private int $id;
    private string $adress;
    private int $postal_code;
    private string $city;
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    public function setPostalCode(int $postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

}