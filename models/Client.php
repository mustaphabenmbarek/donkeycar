<?php

class Client
{
    // les propriétés
    private int $id;
    private string $civility; 
    private string $firstname;
    private string $lastname;
    private string $birthday;
    private string $address;
    private int $postal_code;
    private string $city;
    private string $email;
    private string $tel_number;
    private string $license_drivers;
    
    // les méthodes
    public function __construct(int $id, string $tel_number)
    {
        $this->tel_number = $tel_number;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getCivility(): string
    {
        return $this->civility;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPostalCode(): int
    {
        return $this->postal_code;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelNumber(): string
    {
        return $this->tel_number;
    }

    public function getLicenseDrivers(): string
    {
        return $this->license_drivers;
    }

}

$cl1 = new Client(1, '01 22 55 22 66');
echo $cl1->getTelNumber();