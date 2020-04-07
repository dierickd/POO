<?php


final class PedestrianWay extends HighWay
{

   public const NBLANE = 1;
   public const MAXSPEED = 10;

   private $currentVehicles = [];

   /**
    * @inheritDoc
    */
   public function addVehicle(Vehicle $vehicle)
   {
      // TODO: Implement addVehicule() method.
      if ($vehicle instanceof NotEnergy) {
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