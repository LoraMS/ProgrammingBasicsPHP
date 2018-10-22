<?php

include ('define-class-add-constructor-and-methods.php');

$cars = [];
for($i = 0; $i < 4; $i++){
    $input = explode(" ", fgets(STDIN));
    $brand = $input[0];
    $model = $input[1];
    $engine = $input[3];
    $seatsNumber = $input[4];
    $horsePower = $input[5];
    $color = $input[6];
    $car = new Car($brand, $model, $engine, $seatsNumber, $horsePower, $color);
    $car->setYear(intval($input[2]));
    $cars[] = $car;
}

//print_r($result);

foreach ($cars as $car){
    echo $car.PHP_EOL;
}