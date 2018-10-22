<?php

class Engine{
    public $speed;
    public $power;

    function __construct(int $speed, int $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }
}
