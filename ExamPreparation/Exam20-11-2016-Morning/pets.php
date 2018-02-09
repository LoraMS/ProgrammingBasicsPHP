<?php

$days = readline();
$food = readline();
$dogFoodPerDay = readline();
$catFoodPerDay = readline();
$turtoiseFoodPerDay = readline();

$dogFoodAll = $days * $dogFoodPerDay;
$catFoodAll = $days * $catFoodPerDay;
$turtoiseFoodAll = $days * $turtoiseFoodPerDay * 0.001;

$foodAll = $dogFoodAll + $catFoodAll + $turtoiseFoodAll;
$foodDifference = abs($food - $foodAll);

if ($foodAll <= $food) {
    echo floor($foodDifference)." kilos of food left.";
} else {
    echo ceil($foodDifference)." more kilos of food are needed.";
}
    