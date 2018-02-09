<?php

$hrisantemi = intval(readline());
$rozi = intval(readline());
$laleta = intval(readline());
$season = strtolower(readline());
$isHolliday = strtolower(readline());

$hrisantemiPrice = 0.00;
$roziPrice = 0.00;
$laletaPrice = 0.00;
$discount = 0;

if ($season === "spring" || $season === "summer") {
    if ($isHolliday === "y") {
        $hrisantemiPrice = 2.00 + 2 * 0.15;
        $roziPrice = 4.10 + 4.10 * 0.15;
        $laletaPrice = 2.50 + 2.50 * 0.15;
    } else {
        $hrisantemiPrice = 2.00;
        $roziPrice = 4.10;
        $laletaPrice = 2.50;
    }
} elseif ($season === "autumn" || $season === "winter") {
    if ($isHolliday === "y") {
        $hrisantemiPrice = 3.75 + 3.75 * 0.15;
        $roziPrice = 4.50 + 4.50 * 0.15;
        $laletaPrice = 4.15 + 4.15 * 0.15;
    } else {
        $hrisantemiPrice = 3.75;
        $roziPrice = 4.50;
        $laletaPrice = 4.15;
    }
}

if ($season === "spring" && $laleta > 7) {
    $discount += 0.05;
}

if ($season === "winter" && $rozi >= 10) {
    $discount += 0.10;
}

$amount = $hrisantemi * $hrisantemiPrice + $rozi * $roziPrice + $laleta * $laletaPrice;
$amountAfterDiscount = $amount - $amount * $discount;

if (($hrisantemi + $rozi + $laleta) > 20) {
    $amountAfterDiscount = $amountAfterDiscount - $amountAfterDiscount * 0.20;
}

$result = $amountAfterDiscount + 2;

echo number_format($result, 2, ".", "");