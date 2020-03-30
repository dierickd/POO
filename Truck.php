<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public function __construct(string $color, int $nbSeats, int $stock, string $energy)
    {
        parent::__construct($color, $nbSeats, $stock, $energy);
    }
}