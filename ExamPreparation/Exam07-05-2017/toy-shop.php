<?php

$tripCosts = readline();
$puzzleCount = readline();
$dollsCount = readline();
$teddyBearCount = readline();
$miniCount = readline();
$truckCount = readline();

$puzzlePrice = 2.6;
$dollsPrice = 3;
$teddyBearPrice = 4.1;
$miniPrice = 8.2;
$truckPrice = 2;

$amount = $puzzleCount * $puzzlePrice + $dollsCount * $dollsPrice + $teddyBearCount * $teddyBearPrice + $miniCount * $miniPrice + $truckCount * $truckPrice;
$toysCount = $puzzleCount + $dollsCount + $teddyBearCount + $miniCount + $truckCount;

if ($toysCount >= 50) {
    $discount = $amount *0.25; 
    $profit = $amount - $discount;
}else{
    $profit = $amount;
}

$costs = $profit * 0.1;
$moneyLeft = $profit - $costs;

if ($moneyLeft >= $tripCosts) {
    printf("Yes! %.2f lv left.", $moneyLeft - $tripCosts);
} else {
    printf("Not enough money! %.2f lv needed.", $tripCosts - $moneyLeft);
}