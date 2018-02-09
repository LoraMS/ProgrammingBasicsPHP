<?php

$product = readline();
$town = readline();
$quantity = readline();

$price = 0.0;

if($town === "Sofia"){
    if($product === "coffee"){
        $price = 0.50;
    } elseif($product === "water") {
        $price = 0.80;
    } elseif ($product === "beer") {
        $price = 1.20;
    } elseif ($product === "sweets") {
        $price = 1.45;
    } elseif ($product === "peanuts") {
        $price = 1.60;
    }
} elseif ($town === "Plovdiv") {
    if($product === "coffee"){
        $price = 0.40;
    } elseif($product === "water") {
        $price = 0.70;
    } elseif ($product === "beer") {
        $price = 1.15;
    } elseif ($product === "sweets") {
        $price = 1.30;
    } elseif ($product === "peanuts") {
        $price = 1.50;
    }
} elseif ($town === "Varna") {
    if($product === "coffee"){
        $price = 0.45;
    } elseif($product === "water") {
        $price = 0.70;
    } elseif ($product === "beer") {
        $price = 1.10;
    } elseif ($product === "sweets") {
        $price = 1.35;
    } elseif ($product === "peanuts") {
        $price = 1.55;
    }
}

$amount = $quantity * $price;
echo $amount;

