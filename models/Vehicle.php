<?php

class Vehicle
{
    private int $id;
    private string $registre_number;
    private string $color;
    private int $nbseat;
    private float $price_day;
    private string $insurance;
    private int $km;
    private Model $model;
    private string $fuel;

    // public function __construct(int $id, string $registre_number, string $color, int $nbseat, float $price_day, int $km, Model $model, string $fuel)
    // {
    //     //$this->id = $id;
    //     $this->registre_number = $registre_number;
    //     $this->color = $color;
    //     $this->nbseat = $nbseat;
    //     $this->price_day = $price_day;
    //     $this->km = $km;
    //     $this->model = $model;
    //     $this->fuel = $fuel;
    // }

    public function getId(): int
    {
        return $this->id;
    }

    public function getClientId(): int
    {
        return $this->client_id;
    }

    public function getRegistreNumber(): string
    {
        return $this->registre_number;
    }

    public function setRegistreNumber($registre_number): void
    {
        $this->registre_number = $registre_number;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbseat(): int
    {
        return $this->nbseat;
    }

    public function setNbseat(int $nbseat): void
    {
        $this->nbseat = $nbseat;
    }

    public function getPriceDay(): float
    {
        return $this->price_day;
    }

    public function setPriceDay(float $price_day): void
    {
        $this->price_day = $price_day;
    }

    public function getKm(): int
    {
        return $this->km;
    }

    public function getFuel(): string
    {
        return $this->fuel;
    }
    
    
}

//(int $id, string $color, int $nbseat, float $price_day, int $km, Model $model, string $fuel)
$mark1 = new Mark(1, 'audi');
$model1 = new Model(1, $mark1, 'a3');
$car1 = new Vehicle(1, '123abc54', 'bleu', 3, 20.0, 50, $model1, 'oil');
echo $car1->getNbseat();
echo $car1->getColor();