<?php

$season = strtolower(readline());
$group = strtolower(readline());
$studentCount = intval(readline());
$sleepingCount = intval(readline());

$sport = "";
$price = 0.00;

if ($season === "winter") {
    if ($group === "boys") {
        $sport = "Judo";
        $price = 9.60;
    } elseif ($group === "girls") {
        $sport = "Gymnastics";
        $price = 9.60;
    } elseif ($group === "mixed") {
        $sport = "Ski";
        $price = 10.00;
    }
} elseif ($season === "spring") {
    if ($group === "boys") {
        $sport = "Tennis";
        $price = 7.20;
    } elseif ($group === "girls") {
        $sport = "Athletics";
        $price = 7.20;
    } elseif ($group === "mixed") {
        $sport = "Cycling";
        $price = 9.50;
    }
} elseif ($season === "summer") {
    if ($group === "boys") {
        $sport = "Football";
        $price = 15.00;
    } elseif ($group === "girls") {
        $sport = "Volleyball";
        $price = 15.00;
    } elseif ($group === "mixed") {
        $sport = "Swimming";
        $price = 20.00;
    }
}

$amount = $sleepingCount * $price * $studentCount;

if ($studentCount >= 50) {
    $amount = $amount - $amount * 0.5;
} elseif ($studentCount >= 20 && $studentCount < 50) {
    $amount = $amount - $amount * 0.15;
} elseif ($studentCount >= 10 && $studentCount < 20) {
    $amount = $amount - $amount * 0.05;
}

echo "$sport ";
echo number_format($amount, 2, ".", "");
echo " lv.";