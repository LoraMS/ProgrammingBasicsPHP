<?php

include 'car.php';
include 'engine.php';
include 'cargo.php';
include 'tire.php';

//$n = intval(fgets(STDIN));
//$cars = [];
//for($i = 0; $i < $n; $i++){
//    $line = explode(" ", trim(fgets(STDIN)));
//    $model = $line[0];
//    $speed = intval($line[1]);
//    $power = intval($line[2]);
//    $weight = intval($line[3]);
//    $type = $line[4];
//    $firstTirePressure = floatval($line[5]);
//    $firstTireAge = intval($line[6]);
//    $secondTirePressure = floatval($line[7]);
//    $secondTireAge = intval($line[8]);
//    $thirdTirePressure = floatval($line[9]);
//    $thirdTireAge = intval($line[10]);
//    $fourthTirePressure = floatval($line[11]);
//    $fourthTireAge = intval($line[12]);
//    $cars[] = new Car($model, $speed, $power, $weight, $type, $firstTirePressure, $firstTireAge, $secondTirePressure, $secondTireAge, $thirdTirePressure, $thirdTireAge, $fourthTirePressure, $fourthTireAge);
//}
//
//$cargoType = trim(fgets(STDIN));
//$carsWithCargoType = array_filter($cars, function(Car $car) use ($cargoType){
//    return $car->cargo->type === $cargoType;
//});
//
//foreach ($carsWithCargoType as $car){
//    if($cargoType === 'fragile' && $car->checkPressure()){
//        $car->print();
//    } elseif ($cargoType === 'flamable' && $car->checkEnginePower()){
//        $car->print();
//    }
//}


$n = intval(trim(fgets(STDIN)));
$cars = [];
for($i = 0; $i < $n; $i++){
    $line = explode(" ", trim(fgets(STDIN)));

    list($model, $speed, $power, $weight, $type, $firstTirePressure, $firstTireAge, $secondTirePressure, $secondTireAge,                     $thirdTirePressure, $thirdTireAge, $fourthTirePressure, $fourthTireAge) = $line;

    $engine = new Engine(intval($speed), intval($power));
    $cargo = new Cargo(intval($weight), $type);

    $firstTire = new Tire(floatval($firstTirePressure), intval($firstTireAge));
    $secondTire = new Tire(floatval($secondTirePressure), intval($secondTireAge));
    $thirdTire = new Tire(floatval($thirdTirePressure), intval($thirdTireAge));
    $fourthTire = new Tire(floatval($fourthTirePressure), intval($fourthTireAge));

    $tires = array($firstTire, $secondTire, $thirdTire, $fourthTire);

    $cars[] = new Car($model, $engine, $cargo, $tires);
}

$cargoType = trim(fgets(STDIN));

if($cargoType === 'fragile'){
    foreach ($cars as $car){
        if($car->cargo->getType() === 'fragile'){
            foreach($car->tires as $tire){
                if($tire->pressure < 1){
                    echo $car->getModel()."\n";
                    break;
                }
            }
        }
    }
} elseif ($cargoType === 'flamable'){
    foreach ($cars as $car) {
        if ($car->cargo->getType() === 'flamable') {
            if($car->engine->power > 250){
                echo $car->getModel()."\n";
            }
        }
    }
}