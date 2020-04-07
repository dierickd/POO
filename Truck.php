<?php
require_once 'Vehicle.php';

class Truck extends Car
{

   /**
    * Truck constructor.
    * @param string $color
    * @param int    $nbSeats
    * @param string $energy
    */
   public function __construct(string $color, int $nbSeats, string $energy)
   {
      parent::__construct($color, $nbSeats, $energy);
   }

}
