<?php


class Bicycle
{
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    public $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats = 1;
    /**
     * @var integer
     */
    private $nbWheels = 2;
    /**
     * @var bool
     */
    public $start = false;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }


    /**
     * @return string
     */
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    /**
     * @return string
     */
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

    /**
     * @return bool
     */
    public function isStart(): bool
    {
        return $this->start;
    }

    /**
     * @param bool $start
     */
    public function setStart(bool $start): void
    {
        $this->start = $start;
    }


}