<?php

$days = readline();
$bakers = readline();
$cakeCount = readline();
$wafflesCount = readline();
$pancakeCount = readline();

$cakePriceLv = 45;
$wafflesPriceLv = 5.80;
$pancakePriceLv = 3.20;

$cakesPerDay = ($cakeCount * $bakers) * $cakePriceLv;
$wafflesPerDay = ($wafflesCount * $bakers) * $wafflesPriceLv;
$pancakesPerDay = ($pancakeCount * $bakers) * $pancakePriceLv;

$cakesAllAmount = ($cakesPerDay - $cakesPerDay / 8) * $days;
$wafflesAllAmount = ($wafflesPerDay - $wafflesPerDay / 8) * $days;
$pancakesAllAmount = ($pancakesPerDay - $pancakesPerDay / 8) * $days;

$charityAmount = $cakesAllAmount + $wafflesAllAmount + $pancakesAllAmount;

printf("%.2f", $charityAmount);