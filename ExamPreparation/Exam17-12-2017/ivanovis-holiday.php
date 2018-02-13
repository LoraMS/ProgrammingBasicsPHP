<?php

$nights = intval(readline());
$destination = readline();
$transport = strtolower(readline());

$price = 0.00;

if ($destination === "Miami") {
    if ($nights <= 10) {
        $price = (24.99 * 2 + 14.99 * 3) * $nights;
    } elseif ($nights > 10 && $nights <= 15) {
        $price = (22.99 * 2 + 11.99 * 3) * $nights;
    } elseif ($nights > 15) {
        $price = (20.00 * 2 + 10.00 * 3) * $nights;
    }
} elseif ($destination === "Canary Islands") {
    if ($nights <= 10) {
        $price = (32.50 * 2 + 28.50 * 3) * $nights;
    } elseif ($nights > 10 && $nights <= 15) {
        $price = (30.50 * 2 + 25.60 * 3) * $nights;
    } elseif ($nights > 15) {
        $price = (28.00 * 2 + 22.00 * 3) * $nights;
    }
} elseif ($destination === "Philippines") {
    if ($nights <= 10) {
        $price = (42.99 * 2 + 39.99 * 3) * $nights;
    } elseif ($nights > 10 && $nights <= 15) {
        $price = (41.00 * 2 + 36.00 * 3) * $nights;
    } elseif ($nights > 15) {
        $price = (38.50 * 2 + 32.40 * 3) * $nights;
    }
}

$dogTaxes = $price * 0.25;
$price += $dogTaxes;

/*
 *              train               bus         airplane
  Възрастни	22.30 лв	45.00 лв	90.00 лв
  Деца            12.50 лв	37.00 лв	68.50 лв

 */

if ($transport === "train") {
    $transportPrice = 22.30 * 2 + 12.50 * 3;
} elseif ($transport === "bus") {
    $transportPrice = 45.00 * 2 + 37.00 * 3;
} elseif ($transport === "airplane") {
    $transportPrice = 90.00 * 2 + 68.50 * 3;
}

$price += $transportPrice;

echo number_format($price, 3, ".", "");