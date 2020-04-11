<?php

// MotorWay.php
require_once 'HighWay.php';

final class MotorWay extends HighWay

{

    /**
     * @var int
     */
    protected $nbLane = 4;

    /**
     * @var int
     */
    protected $maxSpeed = 130;

    final public function addVehicle($vehicle): string {
        if ($vehicle instanceof MotorVehicle){
            $this->currentVehicles= array_push($currentVehicles, $vehicle);
            return "Your vehicle is added to the list";
        }
        else {
            return "Your vehicle cannot be there";
        }

    }


}