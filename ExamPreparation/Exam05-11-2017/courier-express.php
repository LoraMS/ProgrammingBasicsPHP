<?php

$weight = floatval(readline());
$servicesType = strtolower(readline());
$distance = intval(readline());

$price = 0.00;

//if ($servicesType === "standard") {
//    if ($weight <= 1) {
//        $price = 0.03 * $distance;
//    } elseif ($weight > 1 && $weight <= 10) {
//        $price = 0.05 * $distance;
//    } elseif ($weight > 10 && $weight <= 40) {
//        $price = 0.10 * $distance;
//    } elseif ($weight > 40 && $weight <= 90) {
//        $price = 0.15 * $distance;
//    } elseif ($weight > 90 && $weight <= 150) {
//        $price = 0.20 * $distance;
//    }
//} elseif ($servicesType === "express") {
//    if ($weight <= 1) {
//        $priceSt = 0.03 * $distance;
//        $charge = 0.03 * 0.8 * $weight;
//    } elseif ($weight > 1 && $weight <= 10) {
//        $priceSt = 0.05 * $distance;
//        $charge = 0.05 * 0.4 * $weight;
//    } elseif ($weight > 10 && $weight <= 40) {
//        $priceSt = 0.10 * $distance;
//        $charge = 0.10 * 0.05 * $weight;
//    } elseif ($weight > 40 && $weight <= 90) {
//        $priceSt = 0.15 * $distance;
//        $charge = 0.15 * 0.02 * $weight;
//    } elseif ($weight > 90 && $weight <= 150) {
//        $priceSt = 0.20 * $distance;
//        $charge = 0.20 * 0.01 * $weight;
//    }
//    $priceWithCharge = $charge * $distance;
//    $price = $priceSt + $priceWithCharge;
//}


if ($weight <= 1) {
    $price = 0.03 * $distance;
} elseif ($weight > 1 && $weight <= 10) {
    $price = 0.05 * $distance;
} elseif ($weight > 10 && $weight <= 40) {
    $price = 0.10 * $distance;
} elseif ($weight > 40 && $weight <= 90) {
    $price = 0.15 * $distance;
} elseif ($weight > 90 && $weight <= 150) {
    $price = 0.20 * $distance;
}

if ($servicesType === "express") {
    if ($weight <= 1) {
        $charge = 0.03 * 0.8 * $weight;
    } elseif ($weight > 1 && $weight <= 10) {
        $charge = 0.05 * 0.4 * $weight;
    } elseif ($weight > 10 && $weight <= 40) {
        $charge = 0.10 * 0.05 * $weight;
    } elseif ($weight > 40 && $weight <= 90) {
        $charge = 0.15 * 0.02 * $weight;
    } elseif ($weight > 90 && $weight <= 150) {
        $charge = 0.20 * 0.01 * $weight;
    }
    $priceWithCharge = $charge * $distance;
    $price += $priceWithCharge;
}


echo "The delivery of your shipment with weight of ";
echo number_format($weight, 3, ".", "");
echo " kg. would cost ";
echo number_format($price, 2, ".", "");
echo " lv.";
