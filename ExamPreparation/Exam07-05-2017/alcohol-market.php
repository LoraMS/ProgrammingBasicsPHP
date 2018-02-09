<?php

$wiskyPrice = readline();
$bira = readline();
$wine = readline();
$rakia = readline();
$wisky = readline();

$wiskiAmount = $wiskyPrice * $wisky;

$rakiaPrice = $wiskyPrice / 2;
$winePrice = $rakiaPrice - $rakiaPrice*0.4;
$biraPrice = $rakiaPrice - $rakiaPrice*0.8;

$biraAmount = $bira * $biraPrice;
$rakiaAmount = $rakia * $rakiaPrice;
$wineAmount = $wine * $winePrice;

$allAmount = $biraAmount + $rakiaAmount + $wineAmount + $wiskiAmount;

printf("%.2f", $allAmount);


