<?php

class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distanceTraveled;
    private $timeTraveled = 0.0;
    private $minutesPerKm;
    private $fuelPerKm;


    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
        $this->distanceTraveled = 0.0;
        $this->timeTraveled = 0.0;
        $this->minutesPerKm = 60 / $speed;
        $this->fuelPerKm = $this->fuelEconomy / 100;
    }

    public function travel($distance){
        $neededFuel = $this->fuelPerKm * $distance;

        if($this->fuel >= $neededFuel){
            $this->distanceTraveled += $distance;
            $this->fuel -= $neededFuel;
            $this->timeTraveled += $distance * $this->minutesPerKm;
        }
    }

    public function refuel($extraFuel){
        $this->fuel += $extraFuel;
    }

    public function printDistance(): void
    {
        $dist = number_format(round($this->distanceTraveled, 1), 1, '.', '');
        echo "Total Distance: {$dist}" . PHP_EOL;
    }

    public function printTime(): void
    {
        $hours = floor($this->timeTraveled / 60);
        $minutes = floor($this->timeTraveled % 60);
        echo "Total Time: {$hours} hours and {$minutes} minutes" . PHP_EOL;
    }

    public function printFuel(): void
    {
        $f = number_format(round($this->fuel, 1), 1, '.', '');
        echo "Fuel left: {$f} liters" . PHP_EOL;
    }
}