<?php

class Tire{
    public $pressure;
    public $age;

    public function __construct($pressure, $age)
    {
        $this->pressure = $pressure;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }
}
