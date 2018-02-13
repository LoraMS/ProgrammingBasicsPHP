<?php

$month = strtolower(readline());
$hours = intval(readline());
$people = intval(readline());
$dayNight = strtolower(readline());

$pricePerHour = 0.00;

if ($month === "march" || $month === "april" || $month === "may") {
    if ($dayNight === "day") {
        $pricePerHour = 10.50;
    } elseif ($dayNight === "night") {
        $pricePerHour = 8.40;
    }
} elseif ($month === "june" || $month === "july" || $month === "august") {
    if ($dayNight === "day") {
        $pricePerHour = 12.60;
    } elseif ($dayNight === "night") {
        $pricePerHour = 10.20;
    }
}

if ($people >= 4) {
    $pricePerHour = $pricePerHour - $pricePerHour * 0.10;
}

if ($hours >= 5) {
    $pricePerHour = $pricePerHour - $pricePerHour * 0.50;
}

$price = $pricePerHour * $hours * $people;

echo "Price per person for one hour: ";
echo number_format($pricePerHour, 2, ".", "");
echo "\n";
echo "Total cost of the visit: ";
echo number_format($price, 2, ".", "");
