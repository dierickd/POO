<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$car = new Car('blue', 4, 'gazol');
$car->isStart();
$car->setStart(true);

$car->forward();
$stop = $car->brake();
echo $stop;

var_dump($car);
