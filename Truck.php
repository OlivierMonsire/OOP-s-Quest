<?php

// Truck.php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const LOADING = [
        'in filling',
        'full',
    ];

    private $loading;

    private $storageCapacity;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }


    public function getLoading(): string
    {
        return $this->energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->energy;
    }

    public function setLoading(string $loading): string
    {
        $this->loading = $loading;
        return $this;
    }


    public function setStorageCapacity(string $storageCapacity): int
    {
        $this->storageCapacity = $storageCapacity;
        return $this;
    }
}