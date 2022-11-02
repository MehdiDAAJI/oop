<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
$car = new Car('black', 4, 'essence');
$car = new Car('red', 2, 'diesels');
$bike = new Bicycle('red');
var_dump($bike);
var_dump($car);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(10) . ' km/h' . '<br>';
echo $bike->brake() . '<br><br><br><br><br>';

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->setCurrentSpeed(10) . ' km/h' . '<br>';
echo $car->brake();
