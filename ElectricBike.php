<?php

// ElectricBike.php

require_once 'NoMotorVehicle.php';
require_once 'ChargingStation.php';
require_once 'RechargeableInterface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    // … i

    public function charge(int $percentage): int
    {
        return $percentage;
    }

    public function unLoad(int $percentage): int
    {
        return $percentage;
    }

}
