<?php

// ResidentialWay.php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    /**
     * @var int
     */
    protected $nbLane = 2;

    /**
     * @var int
     */
    protected $maxSpeed = 50;

    final public function addVehicle($vehicle): string {
        if ($vehicle instanceof Vehicle){
            $this->currentVehicles= array_push($currentVehicles, $vehicle);
            return "Your vehicle is added to the list";
        }
        else {
            return "Your vehicle cannot be there";
        }

    }



}