<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{

   /**
    * Car constructor.
    * @param string $color
    * @param int    $nbSeats
    * @param string $energy
    */
   public function __construct(string $color, int $nbSeats, string $energy)
   {
      parent::__construct($color, $nbSeats, $energy);
   }

   /**
    * @param mixed $energy
    * @return void
    */
   public function setEnergy(string $energy): void
   {
      if (in_array($energy, self::ALLOWED_ENERGIES, true)) {
         $this->energy = $energy;
      }
   }
}