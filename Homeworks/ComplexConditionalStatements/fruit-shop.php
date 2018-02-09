<?php

$fruit = strtolower(readline());
$day = strtolower(readline());
$quantity = doubleval(readline());

$price = 0.0;
// $price = -1.0;

// input is uppercase e.g. Monday, but $day is lowercase e.g. monday because -> strtolower();
if ($day === "monday" || $day === "tuesday" || $day === "wednesday" || $day === "thursday" || $day === "friday") {
    if ($fruit === "banana") {
        $price = 2.50;
    } elseif ($fruit === "apple") {
        $price = 1.20;
    } elseif ($fruit === "orange") {
        $price = 0.85;
    } elseif ($fruit === "grapefruit") {
        $price = 1.45;
    } elseif ($fruit === "pineapple") {
        $price = 5.50;
    } elseif ($fruit === "kiwi") {
        $price = 2.70;
    } elseif ($fruit === "grapes") {
        $price = 3.85;
    }
} elseif ($day === "saturday" || $day === "sunday") {
    if ($fruit === "banana") {
        $price = 2.70;
    } elseif ($fruit === "apple") {
        $price = 1.25;
    } elseif ($fruit === "orange") {
        $price = 0.90;
    } elseif ($fruit === "grapefruit") {
        $price = 1.60;
    } elseif ($fruit === "pineapple") {
        $price = 5.60;
    } elseif ($fruit === "kiwi") {
        $price = 3.00;
    } elseif ($fruit === "grapes") {
        $price = 4.20;
    }
}

if ($price > 0) { //($price >= 0)
    $amount = $price * $quantity;
    printf("%.2f", $amount);
} else {
    echo "error";
}

