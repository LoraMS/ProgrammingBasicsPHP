<?php

$days = intval(readline());
$room = strtolower(readline());
$rating = strtolower(readline());

$nights = $days - 1;
$priceNights = 0.00;
$price = 0.00;


if ($room === "room for one person") {
    $priceNights = $nights * 18.00;
    $price = $priceNights;
} elseif ($room === "apartment") {
    $priceNights = $nights * 25.00;
    if ($days < 10) {
        $price = $priceNights - $priceNights * 0.30;
    } elseif ($days >= 10 && $days < 15) {
        $price = $priceNights - $priceNights * 0.35;
    } elseif ($days >= 15) {
        $price = $priceNights - $priceNights * 0.50;
    }
} elseif ($room === "president apartment") {
    $priceNights = $nights * 35.00;
    if ($days < 10) {
        $price = $priceNights - $priceNights * 0.10;
    } elseif ($days >= 10 && $days < 15) {
        $price = $priceNights - $priceNights * 0.15;
    } elseif ($days >= 15) {
        $price = $priceNights - $priceNights * 0.20;
    }
}

if ($rating === "positive") {
    $price = $price + $price * 0.25;
} elseif ($rating === "negative") {
    $price = $price - $price * 0.10;
}

echo number_format($price, 2, ".", "");