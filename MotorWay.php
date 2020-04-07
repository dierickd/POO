<?php


final class MotorWay extends HighWay
{

   public const NBLANE = 4;
   public const MAXSPEED = 130;

   private $currentVehicles = [];

   /**
    * @inheritDoc
    */
   public function addVehicle(Vehicle $vehicle)
   {
      // TODO: Implement addVehicule() method.
      if ($vehicle instanceof Car) {
         $this->setCurrentVehicles((array)$vehicle);
      }
   }

   /**
    * @return array
    */
   public function getCurrentVehicles(): array
   {
      return $this->currentVehicles;
   }

   /**
    * @param array $currentVehicles
    */
   public function setCurrentVehicles(array $currentVehicles): void
   {
      $this->currentVehicles = $currentVehicles;
   }


}