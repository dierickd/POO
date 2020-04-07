<?php

// Vehicle.php

class Vehicle
{
   public const ALLOWED_ENERGIES = [
      'fuel',
      'electric',
      'diesel',
   ];
   private $loading = 0;
   private $stock;
   protected $energy;
   private $color;
   private $currentSpeed;
   private $nbSeats;
   private $nbWheels;

   /**
    * Vehicle constructor.
    * @param string $color
    * @param int    $nbSeats
    * @param string $energy
    */
   public function __construct(string $color, int $nbSeats, string $energy = null)
   {
      $this->color = $color;
      $this->nbSeats = $nbSeats;
      $this->energy = $energy;
   }

   public function forward(): string
   {
      $this->currentSpeed = 15;
      return "Go !";
   }

   public function brake(): string
   {
      $sentence = "";
      while ($this->currentSpeed > 0) {
         $this->currentSpeed--;
         $sentence .= "Brake !!!";
      }

      $sentence .= "I'm stopped !";
      return $sentence;
   }

   public function getCurrentSpeed(): int
   {
      return $this->currentSpeed;
   }

   public function setCurrentSpeed(int $currentSpeed): void
   {
      if ($currentSpeed >= 0) {
         $this->currentSpeed = $currentSpeed;
      }
   }

   public function getColor(): string
   {
      return $this->color;
   }

   public function setColor(string $color): void
   {
      $this->color = $color;
   }

   public function getNbSeats(): int
   {
      return $this->nbSeats;
   }

   public function setNbSeats(int $nbSeats): void
   {
      $this->nbSeats = $nbSeats;
   }

   public function getNbWheels(): int
   {
      return $this->nbWheels;
   }

   public function setNbWheels(int $nbWheels): void
   {
      $this->nbWheels = $nbWheels;
   }

   /**
    * @return float
    */
   public function getStock(): float
   {
      return $this->stock;
   }

   /**
    * @param int $stock
    */
   public function setStock(int $stock): void
   {
      $this->stock = $stock;
   }

   /**
    * @return int
    */
   public function getLoading(): int
   {
      return $this->loading;
   }

   /**
    * @param int $loading
    */
   public function setLoading(int $loading): void
   {
      if ($loading > $this->getStock()) {
         $this->loading = $this->getStock();
      } else {
         $this->loading = $loading;
      }
   }

   /**
    * @return string
    */
   public function getEnergy(): string
   {
      return $this->energy;
   }

   /**
    * @param mixed $energy
    * @return void
    */
   public function setEnergy(string $energy): void
   {
      if (in_array($energy, self::ALLOWED_ENERGIES)) {
         $this->energy = $energy;
      }
   }

   public function getEmptyOrFull(): string
   {
      if ($this->getLoading() == $this->getStock()) {
         return 'Full';
      } else {
         return 'in filling';
      }
   }

}