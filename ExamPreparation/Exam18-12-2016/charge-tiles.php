<?php

$money = readline();
$floorWidth = readline();
$floorLength = readline();
$triangleSite = readline();
$triangleHeight = readline();
$tilesPrice = readline();
$workersCosts = readline();

$floorArea = $floorLength * $floorWidth;
$tileArea = ($triangleHeight * $triangleSite) / 2;
$tilesNeeded = ceil($floorArea / $tileArea) + 5;

$allCosts = $tilesNeeded * $tilesPrice + $workersCosts;
$diffetence = abs($money - $allCosts);

if($money >= $allCosts){
    printf("%.2f lv left.", $diffetence);
} else{
    printf("You'll need %.2f lv more.", $diffetence);
}
    
