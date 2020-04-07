<?php


abstract class HighWay
{

   private $currentVehicles = [];
   private $nbLane;
   private $maxSpeed;


   /**
    * @param Vehicle $vehicle
    * @return mixed
    */
   abstract public function addVehicle(Vehicle $vehicle);

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
      $this->currentVehicles[] = $currentVehicles;
   }

   /**
    * @return int
    */
   public function getNbLane(): int
   {
      return $this->nbLane;
   }

   /**
    * @param int $nbLane
    */
   public function setNbLane(int $nbLane): void
   {
      $this->nbLane = $nbLane;
   }

   /**
    * @return int
    */
   public function getMaxSpeed(): int
   {
      return $this->maxSpeed;
   }

   /**
    * @param int $maxSpeed
    */
   public function setMaxSpeed(int $maxSpeed): void
   {
      $this->maxSpeed = $maxSpeed;
   }


}