<?php

include ('add-sub-class.php');

class Car{
    public $brand;
    public $model;
    public $year;
    public $details;

    function __construct($brand, $model,  $engine, $seatsNumber, $horsePower, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->details = new ModelDetails($engine, $seatsNumber, $horsePower, $color);
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        if(strlen($year) == 4 && is_numeric($year)){
            $this->year = $year;
        }
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    public function __toString()
    {
        return $this->brand.", ".$this->model.", ".$this->year.", ".$this->details->engine.", ".$this->details->seatsNumber.", ".$this->details->seatsNumber.", ".$this->details->color."\n";
    }

}

