<?php

class Reservation
{
    private Client $client;
    private Vehicle $vehicle;

    private int $id; 
    
    public function __construct(int $id, Client $client, Vehicle $vehicle)
    {
        $this->id = $id;
        $this->vehicle = $vehicle;
        $this->client = $client;
    }

    public function getId(): int
    {
        return $this->id;
    }
}