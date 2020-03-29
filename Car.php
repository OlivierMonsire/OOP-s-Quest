<?php

class Car
{

    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var string
     */
    private $energyLevel;


        public function __construct(string $color, int $nbSeats, string $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $sentence = "";
        if ($this->currentSpeed == 0) {
            $this->currentSpeed++;
            $sentence .= "Let's start!";
        }
        else {
            $sentence .= "I'm already on the road !";
        }
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->NbWheels;
    }

    public function getCurrentWheels(): int
    {
        return $this->CurrentWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->CurrentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->NbSeats;
    }

    public function getEnergyLevel(): string
    {
        return $this->EnergyLevel;
    }


}
