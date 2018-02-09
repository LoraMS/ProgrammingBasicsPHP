<?php

$count = intval(readline());
$text = readline();
$order = strtolower(readline());

$price = 0.00;

if ($text === "9X13") {
    $price = 0.16 * $count;
    if ($count >= 50) {
        $price = $price - $price * 0.05;
    }
} elseif ($text === "10X15") {
    $price = 0.16 * $count;
     if ($count >= 80) {
        $price = $price - $price * 0.03;
    }
} elseif ($text === "13X18") {
    $price = 0.38 * $count;
     if ($count >= 50 && $count <= 100) {
        $price = $price - $price * 0.03;
    } elseif ($count > 100) {
        $price = $price - $price * 0.05;
    }
} elseif ($text === "20X30") {
    $price = 2.90 * $count;
     if ($count >= 10 && $count <= 50) {
        $price = $price - $price * 0.07;
    } elseif ($count > 50) {
        $price = $price - $price * 0.09;
    }
}

if ($order === "online") {
    $price = $price - $price * 0.02;
    echo number_format($price, 2, ".", "");
} else {
    echo number_format($price, 2, ".", "");
}
echo "BGN";