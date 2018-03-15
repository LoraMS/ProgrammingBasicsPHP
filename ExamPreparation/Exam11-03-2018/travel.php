<?php

$distanceAB = floatval(readline());
$truckSpeed = floatval(readline());
$speedDifference = floatval(readline());

$truckTime = ceil($distanceAB / $truckSpeed);
$carSpeed = $speedDifference * 3.6 + $truckSpeed;
$carTime = ceil($distanceAB / $carSpeed);

echo "The truck arrived after $truckTime hours\n";
echo "The car arrived after $carTime hours";



