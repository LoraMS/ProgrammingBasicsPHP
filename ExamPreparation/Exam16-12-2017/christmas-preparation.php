<?php

$paperCount = readline();
$fabricCount = readline();
$glue = readline();
$discount = readline();

$paperPrice = 5.80;
$fabricPrice = 7.20;
$gluePrice = 1.20;

$totalCost = ($paperCount * $paperPrice) + ($fabricCount * $fabricPrice) + ($glue * $gluePrice);

$totalCostWithDiscount = $totalCost - $totalCost * ($discount / 100);

printf("%.3f", $totalCostWithDiscount);