<?php
require_once 'Vehicle.php';

class NotEnergy extends Vehicle
{

   /**
    * Bicycle constructor.
    * @param string      $color
    * @param int         $nbSeats
    * @param string|null $energy
    */
   public function __construct(string $color, int $nbSeats, string $energy = null)
   {
      parent::__construct($color, $nbSeats, $energy);
   }

}