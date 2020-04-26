<?php
// index.php
require_once 'Skateboard.php';
require_once 'Bicycle.php';
require_once 'ElectricCar.php';
require_once 'FuelCar.php';
require_once 'Truck.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ElectricBike.php';
require_once 'RechargeableInterface.php';
require_once 'LightableInterface.php';
require_once 'ChargingStation.php';


$bicycle = new Bicycle('blue', 1);
$car = new ElectricCar('red','4', 'electric');

echo $car->switchOn(). '<br>';
echo $bicycle->switchOn(). '<br>';
echo $bicycle->setDynamo(). '<br>';
echo $bicycle->switchOn(). '<br>';
echo $bicycle->forward(). '<br>';
echo $bicycle->switchOn(). '<br>';
echo  $bicycle->setDynamo(). '<br>';