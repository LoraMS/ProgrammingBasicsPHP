<?php

$budget = floatval(readline());
$season = strtolower(readline());

$location = "";
$place = "";
$price = 0.00;

if ($budget <= 1000) {
    $place = "Camp";
    if ($season === "summer") {
        $location = "Alaska";
        $price = $budget * 0.65;
    } elseif ($season === "winter") {
        $location = "Morocco";
        $price = $budget * 0.45;
    }
} elseif ($budget > 1000 && $budget <= 3000) {
    $place = "Hut";
    if ($season === "summer") {
        $location = "Alaska";
        $price = $budget * 0.80;
    } elseif ($season === "winter") {
        $location = "Morocco";
        $price = $budget * 0.60;
    }
} elseif ($budget > 3000) {
    $place = "Hotel";
    if ($season === "summer") {
        $location = "Alaska";
    } elseif ($season === "winter") {
        $location = "Morocco";
    }
    $price = $budget * 0.90;
}

echo "$location - $place - ";
echo number_format($price, 2, ".", "");

