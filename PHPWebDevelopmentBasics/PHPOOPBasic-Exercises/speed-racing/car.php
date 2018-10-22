<?php

class Car{
    public $model;
    public $fuelAmount;
    public $fuelCostPerKm;
    public $traveledDistance;

    function __construct($model, $fuelAmount, $fuelCostPerKm, $traveledDistance = 0)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCostPerKm = $fuelCostPerKm;
        $this->traveledDistance = $traveledDistance; // all cars start at 0 kilometers traveled
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getFuelAmount()
    {
        return $this->fuelAmount;
    }

    /**
     * @return mixed
     */
    public function getFuelCostPerKm()
    {
        return $this->fuelCostPerKm;
    }

    /**
     * @return int
     */
    public function getTraveledDistance(): int
    {
        return $this->traveledDistance;
    }


    public function checkFuel($fuel){
        return $this->fuelAmount >= $fuel;
    }

    public function drive($distance, $fuel) : void{
        $this->traveledDistance += $distance;
        $this->fuelAmount -= $fuel;
    }

    public function print() : void{
        $fuel = number_format($this->fuelAmount, 2, '.', '');
        echo "$this->model $fuel $this->traveledDistance\n";
    }
}

