<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{


    /**
     * @var string
     */
    protected $energy;

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }

    /**
     * @param mixed $energy
     * @return void
     */
    protected function setEnergy(string $energy):void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
}