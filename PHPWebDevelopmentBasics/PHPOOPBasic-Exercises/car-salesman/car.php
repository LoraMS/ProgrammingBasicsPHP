<?php

class Car{
    public $model;
    public $engine;
    public $weight;
    public $color;

    function __construct(string $model, Engine $engine, $weight = "n/a", string $color = "n/a")
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }

    function __toString()
    {
       $result = '';
       $result .= $this->getModel(). ':' .PHP_EOL;
       $result .= ' '.$this->engine->getModel(). ':' .PHP_EOL;
       $result .= '  Power: '.$this->engine->getPower() .PHP_EOL;
       $result .= '  Displacement: '.$this->engine->getDisplacement() .PHP_EOL;
       $result .= '  Efficiency: '.$this->engine->getEfficiency() .PHP_EOL;
       $result .= ' Weight: '.$this->getWeight() .PHP_EOL;
       $result .= ' Color: '.$this->getColor() .PHP_EOL;

        return $result. PHP_EOL;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

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
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}