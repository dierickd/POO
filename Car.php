<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{

   private $hasParkBrake = false;

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
    * @return string|null
    * @throws Exception
    */
   public function start(): ?string
   {
      if ($this->hasParkBrake) {
         throw new Exception();
      } else {
         return "Le véhicule à démarré !";
      }
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

   /**
    * @param mixed $hasParkBrake
    */
   public function setParkBrake($hasParkBrake)
   {
      $this->hasParkBrake = $hasParkBrake;
   }
}