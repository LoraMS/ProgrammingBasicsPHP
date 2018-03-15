<?php

$pointsCount = intval(readline());
$arenaName = readline();
$day = strtolower(readline());
$state = strtolower(readline());

$discount = 0;
$priceAll = 0;
$counter = 0;

if($arenaName === "Nagrand" && ($day === "monday" || $day === "wednesday")){
    $discount = 0.05;
} elseif ($arenaName === "Gurubashi" && ($day === "tuesday" || $day === "thursday")) {
    $discount = 0.10;
} elseif ($arenaName === "Dire Maul" && ($day === "friday" || $day === "saturday")) {
    $discount = 0.07;
}

if($state === "poor"){
    $priceAll = 7000;
} elseif ($state === "normal") {
    $priceAll = 14000;
} elseif ($state === "legendary") {
    $priceAll = 21000;
}

$priceAllAfterDiscount = $priceAll - $priceAll * $discount;
$priceOne = $priceAllAfterDiscount / 5;
while (true) {
    if($pointsCount < $priceOne || $counter >= 5){
        break;
    }
    $pointsCount -= $priceOne;
    $counter ++;
    
}

if($counter === 5){
    echo "Items bought: $counter\n";
    echo "Arena points left: $pointsCount\n";
    echo "Success!";
} else{
    echo "Items bought: $counter\n";
    echo "Arena points left: $pointsCount\n";
    echo "Failure!";
}
