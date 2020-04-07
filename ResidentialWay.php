<?php


final class ResidentialWay extends HighWay
{

   public const NBLANE = 2;
   public const MAXSPEED = 50;

   private $currentVehicles = [];

   /**
    * @inheritDoc
    */
   public function addVehicle(Vehicle $vehicle)
   {
      // TODO: Implement addVehicule() method.
      $this->setCurrentVehicles((array)$vehicle);
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