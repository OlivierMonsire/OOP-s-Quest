<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle(blue);
$vroum = new Car(black, 5, electric);

var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);

// Moving car
echo $vroum->start();
echo $vroum->forward();
echo '<br> Vitesse de la voiture : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $vroum->brake();
echo $vroum->start();
echo '<br> Vitesse de la voiture : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $vroum->brake();
