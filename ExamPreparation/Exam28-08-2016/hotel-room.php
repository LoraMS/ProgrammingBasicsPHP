<?php

$month = strtolower(readline());
$nights = intval(readline());

if ($month === "may" || $month === "october") {
    $priceA = $nights * 65;
    $priceS = $nights * 50;
    if ($nights > 7 && $nights <= 14) {
        $priceS -= $priceS * 0.05;
    } elseif ($nights > 14) {
        $priceS -= $priceS * 0.30;
        $priceA -= $priceA * 0.10;
    }
    printf("Apartment: %.2f lv.", $priceA);
    echo "\n";
    printf("Studio: %.2f lv.", $priceS);
} elseif ($month === "june" || $month === "september") {
    $priceA = $nights * 68.70;
    $priceS = $nights * 75.20;
    if ($nights > 14) {
        $priceS -= $priceS * 0.20;
        $priceA -= $priceA * 0.10;
    }
    printf("Apartment: %.2f lv.", $priceA);
    echo "\n";
    printf("Studio: %.2f lv.", $priceS);
} elseif ($month === "july" || $month === "august") {
    $priceA = $nights * 77;
    $priceS = $nights * 76;
    if ($nights > 14) {
        $priceA -= $priceA * 0.10;
    }
    printf("Apartment: %.2f lv.", $priceA);
    echo "\n";
    printf("Studio: %.2f lv.", $priceS);
}

