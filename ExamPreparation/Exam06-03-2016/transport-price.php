<?php

$km = readline();
$dayOrNight = readline();

$taxiStart = 0.7;
$taxiDay = 0.79;
$taxiNight = 0.9;
$bus = 0.09;
$train = 0.06;

if ($km < 20) {
    if ($dayOrNight === "day") {
        $price = $km * $taxiDay + $taxiStart;
    } else {
        $price = $km * $taxiNight + $taxiStart;
    }
} elseif ($km >= 20 && $km < 100) {
    $price = $km * $bus;
} else {
    $price = $km * $train;
}
echo $price;