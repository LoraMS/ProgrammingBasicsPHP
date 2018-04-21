<?php

$month = strtolower(readline());
$nightCount = intval(readline());
$pricePerNightStudio = 0;
$pricePerNightDouble = 0;
$pricePerNightSuite = 0;
$priceStudio = 0;

if ($month === "may" || $month === "october") {
    $pricePerNightStudio += 50;
    $pricePerNightDouble += 65;
    $pricePerNightSuite += 75;
} elseif ($month === "june" || $month === "september") {
    $pricePerNightStudio += 60;
    $pricePerNightDouble += 72;
    $pricePerNightSuite += 82;
} elseif ($month === "july" || $month === "august" || $month === "december") {
    $pricePerNightStudio += 68;
    $pricePerNightDouble += 77;
    $pricePerNightSuite += 89;
}

if (($month === "may" || $month === "october") && $nightCount > 7) {
    $pricePerNightStudio -= $pricePerNightStudio * 0.05;
}

if (($month === "june" || $month === "september") && $nightCount > 14) {
    $pricePerNightDouble -= $pricePerNightDouble * 0.10;
}

if (($month === "july" || $month === "august" || $month === "december") && $nightCount > 14) {
    $pricePerNightSuite -= $pricePerNightSuite * 0.15;
}

$priceDouble = $pricePerNightDouble * $nightCount;
$priceSuite = $pricePerNightSuite * $nightCount;

if (($month === "september" || $month === "october") && $nightCount > 7) {
    $priceStudio = $pricePerNightStudio * ($nightCount - 1);
} else {
    $priceStudio = $pricePerNightStudio * $nightCount;
}


printf("Studio: %.2f lv.\n", $priceStudio);
printf("Double: %.2f lv.\n", $priceDouble);
printf("Suite: %.2f lv.", $priceSuite);
