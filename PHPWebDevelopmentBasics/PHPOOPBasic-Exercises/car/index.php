<?php

include 'Car.php';

$carInfo = explode(' ', trim(fgets(STDIN)));
list($speed, $fuel, $fuelEconomy) = $carInfo;

$car = new Car($speed, $fuel, $fuelEconomy);

while(true){
    $input = explode(' ', trim(fgets(STDIN)));
    if($input[0] === 'END'){
        break;
    }

    if($input[0] === 'Travel'){
        $distanceTraveled = $input[1];
        $car->travel($distanceTraveled);
    } elseif ($input[0] === 'Refuel'){
        $extraFuel = $input[1];
        $car->refuel($extraFuel);
    } elseif ($input[0] === 'Distance'){
        $car->printDistance();
    } elseif ($input[0] === 'Time'){
        $car->printTime();
    } elseif ($input[0] === 'Fuel'){
        $car->printFuel();
    }
}




