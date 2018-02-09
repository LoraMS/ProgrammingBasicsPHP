<?php

$vineyardArea = readline();
$kgGrapePerMeter = readline();
$rejects = readline();

$kgGrape = $vineyardArea * $kgGrapePerMeter;

$kgGrapeAfterRejects = $kgGrape - $rejects;

$grapeForRakia = $kgGrapeAfterRejects * 0.45;
$rakia = $grapeForRakia / 7.5;
$rakiaReturns = $rakia * 9.80;

$grapeForSale = $kgGrapeAfterRejects * 0.55;
$grapeForSaleReturns = $grapeForSale * 1.50;

printf("%.2f\n", $rakiaReturns);
printf("%.2f", $grapeForSaleReturns);

