<?php

$season = strtolower(readline());
$kilometersPerMonth = floatval(readline());
$pricePerMonth = 0.00;

if ($season === "spring" || $season === "autumn") {
    if ($kilometersPerMonth <= 5000) {
        $pricePerMonth = $kilometersPerMonth * 0.75;
    } elseif ($kilometersPerMonth > 5000 && $kilometersPerMonth <= 10000) {
        $pricePerMonth = $kilometersPerMonth * 0.95;
    } elseif ($kilometersPerMonth > 10000 && $kilometersPerMonth <= 20000) {
        $pricePerMonth = $kilometersPerMonth * 1.45;
    }
} elseif ($season === "summer") {
    if ($kilometersPerMonth <= 5000) {
        $pricePerMonth = $kilometersPerMonth * 0.90;
    } elseif ($kilometersPerMonth > 5000 && $kilometersPerMonth <= 10000) {
        $pricePerMonth = $kilometersPerMonth * 1.10;
    } elseif ($kilometersPerMonth > 10000 && $kilometersPerMonth <= 20000) {
        $pricePerMonth = $kilometersPerMonth * 1.45;
    }
} elseif ($season === "winter") {
    if ($kilometersPerMonth <= 5000) {
        $pricePerMonth = $kilometersPerMonth * 1.05;
    } elseif ($kilometersPerMonth > 5000 && $kilometersPerMonth <= 10000) {
        $pricePerMonth = $kilometersPerMonth * 1.25;
    } elseif ($kilometersPerMonth > 10000 && $kilometersPerMonth <= 20000) {
        $pricePerMonth = $kilometersPerMonth * 1.45;
    }
}

$pricePerSeason = $pricePerMonth * 4;
$taxes = $pricePerSeason * 0.10;
$priceFinal = $pricePerSeason - $taxes;

echo number_format($priceFinal, 2, ".", "");