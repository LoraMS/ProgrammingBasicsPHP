<?php
include 'engine.php';
include 'car.php';

$engines = [];
$cars = [];

$engineCount = trim(fgets(STDIN));

for($i = 0; $i < $engineCount; $i++){
    $engineInfo = explode(" ", trim(fgets(STDIN)));

    $engine = new Engine($engineInfo[0], $engineInfo[1]);

    if(count($engineInfo) > 2){
        for ($j = 2; $j < count($engineInfo); $j++) {
            $currentInfo = $engineInfo[$j];
            if (is_numeric($currentInfo)) {
                $engine->setDisplacement(intval($currentInfo));
            } else {
                $engine->setEfficiency($currentInfo);
            }
        }
    }

    $engines[] = $engine;
}

$carsCount = trim(fgets(STDIN));

for($i = 0; $i < $carsCount; $i++){
    $carInfo = explode(" ", trim(fgets(STDIN)));

    $engineModel = $carInfo[1];
    foreach($engines as $engine){
        if($engine->getModel() === $engineModel){
            $carEngine = $engine;
        }
    }

    $car = new Car($carInfo[0], $carEngine);

    if (count($carInfo) > 2) {
        for ($j = 2; $j < count($carInfo); $j++) {
            $currentInfo = $carInfo[$j];
            if (is_numeric($currentInfo)) {
                $car->setWeight(intval($currentInfo));
            } else {
                $car->setColor($currentInfo);
            }
        }
    }

    $cars[] = $car;
}

//print_r($cars);

foreach ($cars as $car){
    echo $car;
}