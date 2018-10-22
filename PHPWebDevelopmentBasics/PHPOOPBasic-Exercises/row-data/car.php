<?php

//include 'engine.php';
//include 'cargo.php';
//include 'tire.php';

//class Car{
//    public $model;
//    public $cargo;
//    public $engine;
//
//    function __construct(string $model, int $speed, int $power,int $weight, string $type, float $firstTirePressure, int $firstTireAge, float $secondTirePressure, int $secondTireAge,float $thirdTirePressure, int $thirdTireAge, float               $fourthTirePressure, int $fourthTireAge)
//    {
//        $this->model = $model;
//        $this->engine = new Engine($speed, $power);
//        $this->cargo = new Cargo($weight, $type);
//        $tire1 = new Tire($firstTirePressure, $firstTireAge);
//        $tire2 = new Tire($secondTirePressure, $secondTireAge);
//        $tire3 = new Tire($thirdTirePressure, $thirdTireAge);
//        $tire4 = new Tire($fourthTirePressure, $fourthTireAge);
//
//        $this->tires = array(
//            'first' => $tire1,
//            'second' => $tire2,
//            'third' => $tire3,
//            'fourth' => $tire4
//        );
//    }
//
//    /**
//     * @return string
//     */
//    public function getModel(): string
//    {
//        return $this->model;
//    }
//
//    public function checkPressure(){
//        foreach($this->tires as $key => $value){
//            return $value->getPressure() < 1;
//        }
//    }
//
//    public function checkEnginePower(){
//        return $this->engine->getPower() > 250;
//    }
//
//    public function print(): void{
//        echo "$this->model\n";
//    }
//}


class Car{
    public $model;
    public $cargo;
    public $engine;
    public $tires;

    function __construct(string $model, Engine $engine,Cargo $cargo, array $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;

        $this->tires = $tires;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    public function checkPressure(){
        foreach($this->tires as $key => $value){
            return $value->getPressure() < 1;
        }
    }

    public function checkEnginePower(){
        return $this->engine->getPower() > 250;
    }

    public function print(): void{
        echo "$this->model\n";
    }
}