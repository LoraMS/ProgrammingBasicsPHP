<?php

$smallestRoom = readline();
$kitchen = readline();
$pricePerMeter = readline();

$bathroom = $smallestRoom / 2;
$middleRoom = $smallestRoom + $smallestRoom * 0.1;
$biggestRoom = $middleRoom + $middleRoom * 0.1;

$allRooms = $biggestRoom + $middleRoom + $smallestRoom + $kitchen + $bathroom;
$all = $allRooms + $allRooms * 0.05;

$price = $all * $pricePerMeter;

printf("%.2f", $price);

