<?php

// PedestrianWay.php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    /**
     * @var int
     */
    protected $nbLane = 1;

    /**
     * @var int
     */
    protected $maxSpeed = 10;

    final public function addVehicle($vehicle): string {
        if ($vehicle instanceof NoMotorVehicle){
            $this->currentVehicles= array_push($currentVehicles, $vehicle);
            return "Your vehicle is added to the list";
        }
        else {
            return "Your vehicle cannot be there";
        }

    }


}
