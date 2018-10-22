<?php

include 'car.php';
//use Car;

$n = intval(fgets(STDIN));
$cars = [];

for($i = 0; $i < $n; $i++){
    $line = explode(" ", trim(fgets(STDIN)));
    $model = $line[0];
    $fuelAmount = intval($line[1]);
    $fuelCostPerKm = floatval($line[2]);
    $cars[] = new Car($model, $fuelAmount, $fuelCostPerKm);
}

while(true){
    $info = explode(" ", trim(fgets(STDIN)));
    if($info[0] === 'End'){
        break;
    }

    $carModel = $info[1];
    $distance = intval($info[2]);

    $currentCar = array_values(array_filter($cars, function(Car $car) use ($carModel){
        return $car->getModel() === $carModel;
    }))[0];

    $fuelUsed = number_format($distance * $currentCar->getFuelCostPerKm(), 2, '.', '');
    if($currentCar->checkFuel($fuelUsed)){
        $currentCar->drive($distance, $fuelUsed);
    } else{
        echo 'Insufficient fuel for the drive';
    }
}

foreach ($cars as $car) {
    $car->print();
}
