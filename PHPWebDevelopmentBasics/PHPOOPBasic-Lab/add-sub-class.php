<?php

class ModelDetails {
    public $engine;
    public $seatsNumber;
    public $horsePower;
    public $color;

    function __construct($engine, $seatsNumber, $horsePower, $color)
    {
        $this->engine = $engine;
        $this->seatsNumber = $seatsNumber;
        $this->horsePower = $horsePower;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getSeatsNumber()
    {
        return $this->seatsNumber;
    }

    /**
     * @return mixed
     */
    public function getHorsePower()
    {
        return $this->horsePower;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}