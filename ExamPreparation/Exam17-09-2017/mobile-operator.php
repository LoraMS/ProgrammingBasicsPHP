<?php

$contractTime = strtolower(readline());
$contractType = strtolower(readline());
$internet = strtolower(readline());
$monthCount = intval(readline());

$perMonth = 0.00;
if($contractTime === "one"){
    if($contractType === "small"){
        $perMonth = 9.98;
    } elseif($contractType === "middle"){
        $perMonth = 18.99;
    } elseif($contractType === "large"){
        $perMonth = 25.98;
    } elseif($contractType === "extralarge"){
        $perMonth = 35.99;
    }
} elseif ($contractTime === "two") {
    if($contractType === "small"){
        $perMonth = 8.58;
    } elseif($contractType === "middle"){
        $perMonth = 17.09;
    } elseif($contractType === "large"){
        $perMonth = 23.59;
    } elseif($contractType === "extralarge"){
        $perMonth = 31.79;
    }
}

if ($internet === "yes") {
    if($perMonth <= 10.00){
        $perMonth += 5.50;
    } elseif ($perMonth <= 30.00) {
        $perMonth += 4.35;
    } elseif ($perMonth > 30.00) {
        $perMonth += 3.85;
    }
}

$price = $monthCount * $perMonth;

if($contractTime === "two"){
    $price = $price - $price * 0.0375;
}

echo number_format($price, 2, ".", "");
echo " lv.";