<?php

$budget = floatval(readline());
$season = strtolower(readline());

$class = "";
$car = "";
$amount = 0.00;

if ($budget <= 100) {
    $class = "Economy class";
    if ($season === "summer") {
        $car = "Cabrio";
        $amount = $budget * 0.35;
    } elseif ($season === "winter") {
        $car = "Jeep";
        $amount = $budget * 0.65;
    }
} elseif ($budget > 100 && $budget <= 500) {
    $class = "Compact class";
    if ($season === "summer") {
        $car = "Cabrio";
        $amount = $budget * 0.45;
    } elseif ($season === "winter") {
        $car = "Jeep";
        $amount = $budget * 0.80;
    }
} elseif ($budget > 500) {
    $class = "Luxury class";
    $car = "Jeep";
    $amount = $budget * 0.90;
}

echo "$class\n";
echo "$car - ";
echo number_format($amount, 2, ".", "");