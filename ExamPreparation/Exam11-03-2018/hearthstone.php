<?php

$rest = intval(readline());
$cardPrice = floatval(readline());
$adventurePrice = floatval(readline());
$coffeePrice = floatval(readline());

$timeForRest = $rest - 5 - 3*2 -2*2;
$moneySpendCards = 3*$cardPrice;
$moneySpendAdventures = 2*$adventurePrice;
$moneySpend = $coffeePrice + $moneySpendCards + $moneySpendAdventures;

echo number_format($moneySpend, 2, ".", "")."\n";
echo $timeForRest;