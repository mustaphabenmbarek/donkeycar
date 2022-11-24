<?php

class Reservation
{
    private int $id;
    private int $client_id;
    private int $vehicle_id;
    private Client $client;
    private Vehicle $vehicle;
    private DateTime $start_date;
    private DateTime $end_date;
     
    // public function __construct(int $id, Client $client, Vehicle $vehicle) ---> construct inutil
    // {
    //     $this->id = $id;
    //     $this->vehicle = $vehicle;
    //     $this->client = $client;
    // }

    public function getId(): int
    {
        return $this->id;
    }

    // Client
    public function getClientId(): int
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): void
    {
        $this->client_id = $client_id;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    // Vehicle
    public function getVehicleId(): int
    {
        return $this->vehicle_id;
    }
    
    public function setVehicleID(int $vehicle_id): void
    {
        $this->vehicle_id = $vehicle_id;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }
    
    // Date
    public function getStartDate(): string
    {
        return $this->start_date->format("d/m/y");
    }

    public function setStartDate(DateTime $start_date): void
    {
        $this->start_date = $start_date;
    }

    public function getEndDate(): string
    {
        return $this->end_date->format("d/m/y");
    }

    public function setEndDate(DateTime $end_date): void
    {
        $this->end_date = $end_date;
    }

}