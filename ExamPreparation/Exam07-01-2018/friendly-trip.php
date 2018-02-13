<?php

$destination = intval(readline());
$fuelConsumption = intval(readline());
$pricePerLiter = floatval(readline());
$amount = intval(readline());

$allFuelConsumtion = $destination * $fuelConsumption / 100;
$fuelPrice = $allFuelConsumtion * $pricePerLiter;

$difference = abs($amount - $fuelPrice);

if ($amount >= $fuelPrice) {
    echo "You can take a trip. ";
    echo number_format($difference, 2, ".", "");
    echo " money left.";
} else {
    echo "Sorry, you cannot take a trip. Each will receive ";
    echo number_format($amount/5, 2, ".", "");
    echo " money.";
}