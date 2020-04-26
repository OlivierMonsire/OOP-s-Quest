<?php

// ChargingStation.php

class ChargingStation
{
public function fullCharge(RechargeableInterface $vehicle)
{
$vehicle->charge(100);
return 'Votre vehicule est charger';
}

}
