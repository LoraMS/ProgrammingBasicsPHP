<?php

$tripDays = intval(readline());
$food = intval(readline());
$firstDeerFood = floatval(readline());
$secondDeerFood = floatval(readline());
$thirdDeerFood = floatval(readline());

$firstDeerNeed = $firstDeerFood * $tripDays;
$secondDeerNeed = $secondDeerFood * $tripDays;
$thirdDeerNeed = $thirdDeerFood * $tripDays;

$allFoodNeed = $firstDeerNeed + $secondDeerNeed + $thirdDeerNeed;

$difference = abs($food - $allFoodNeed);

if($food > $allFoodNeed){
    echo floor($difference)." kilos of food left.";
} else {
    echo ceil($difference)." more kilos of food are needed.";
}