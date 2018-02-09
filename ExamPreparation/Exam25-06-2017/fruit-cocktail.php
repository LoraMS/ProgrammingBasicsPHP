<?php

$fruit = strtolower(readline());
$size = strtolower(readline());
$drinks = intval(readline());

$price = 0.00;

if ($fruit === "watermelon") {
    if ($size === "small") {
        $price = 56 * 2 * $drinks;
    } elseif ($size === "big") {
        $price = 28.70 * 5 * $drinks;
    }
} elseif ($fruit === "mango") {
     if ($size === "small") {
        $price = 36.66 * 2 * $drinks;
    } elseif ($size === "big") {
        $price = 19.60 * 5 * $drinks;
    }
} elseif ($fruit === "pineapple") {
     if ($size === "small") {
        $price = 42.10 * 2 * $drinks;
    } elseif ($size === "big") {
        $price = 24.80 * 5 * $drinks;
    }
} elseif ($fruit === "raspberry") {
     if ($size === "small") {
        $price = 20 * 2 * $drinks;
    } elseif ($size === "big") {
        $price = 15.20 * 5 * $drinks;
    }
}

if ($price > 1000) {
    $price = $price - $price * 0.5;
} elseif ($price >= 400 && $price <= 1000) {
    $price = $price - $price * 0.15;
}

echo number_format($price, 2, ".", "");
echo " lv.";