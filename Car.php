<?php

// Car.php
require_once 'MotorVehicle.php';
require_once 'LightableInterface.php';

abstract class Car extends MotorVehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;

    /**
     * @var bool
     */
    protected $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
            return 'Park brake in off.' . PHP_EOL;
        } else {
            $this->hasParkBrake = true;
            return 'Park brake in on.' . PHP_EOL;
        }

    }

    public function start()
    {
        $bool=$this->hasParkBrake;
        $sentence = "";
        if ($bool===true){
            throw new exception("You're starting with your brake on.");
        }

        elseif ($this->currentSpeed == 0) {
            $this->currentSpeed++;
            $sentence = "Let's start!";
        }
        else {
            $sentence = "I'm already on the road !";
        }
            return $sentence;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}