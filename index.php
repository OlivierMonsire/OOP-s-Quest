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

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new ElectricCar('red','4', 'electric');
var_dump($car);

$car->setParkBrake();
echo $car-> start();

$autoroute = new MotorWay();
var_dump($autoroute);
echo $autoroute->addVehicle($car);
var_dump($autoroute);



