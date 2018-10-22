<?php
$speed = intval(trim(fgets(STDIN)));
$area = trim(fgets(STDIN));
$limit = getLimit($area);
$infraction = getInfraction($speed, $limit);
$overSpeed = $speed - $limit;
$message = '';

if ($infraction){
    if ($overSpeed >= 0 && $overSpeed <= 20) {
        $message = "Speeding";
    }
    else if ($overSpeed > 20 && $overSpeed <= 40) {
        $message = "Excessive speeding";
    }
    else if ($overSpeed > 40) {
        $message = "Reckless driving";
    }
}
echo $message;

function getLimit(string $zone){
    switch ($zone){
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential':
            $speedLimit = 20;
            break;
        default:
            echo 'Not a Valid Input';
            $speedLimit = 1000;
    }
    return $speedLimit;
}

function getInfraction($speed, $limit){
    $overSpeed = $speed - $limit;
    if ($overSpeed < 0){
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}