<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$truck = new Truck('purple', 2, 15, 'fuel');
$truck->setLoading(10);
$capacity = $truck->getEmptyOrFull();

echo $capacity;

var_dump($truck);