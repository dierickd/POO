<?php

require_once 'Vehicle.php';

require_once 'Car.php';
require_once 'Truck.php';

require_once 'Agricultural.php';
require_once 'Tractor.php';

require_once 'NotEnergy.php';
require_once 'Bicycle.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

// Une class principale => Vehicle.php
// Extends de celle-ci, trois familles
//       => NotEnergy
//       => Car
//       => Agricultural
// Ces trois famille ont à leurs tour divers véhicules associés, je n'ai fais qu'un véhicule par famille pour l'exercice


$volvo = new Car('red', 4, 'fuel');
$volvo->setParkBrake(true);
try {
   echo $volvo->start();
} catch (Exception $e) {
   $volvo->setParkBrake(false);
} finally {
   echo "Ma voiture roule comme un donut";
}
