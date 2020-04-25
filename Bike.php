<?php


class Bike extends NotEnergy implements LightableInterface
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

   public function switchOn(): bool
   {
      if ($this->getCurrentSpeed() > 10) {
         return true;
      } else {
         return false;
      }
   }

   public function switchOff(): bool
   {
      return false;
   }
}