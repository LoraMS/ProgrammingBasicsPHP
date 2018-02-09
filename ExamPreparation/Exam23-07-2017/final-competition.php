<?php

$dancersCount = intval(readline());
$pointsCount = floatval(readline());
$season = strtolower(readline());
$place = readline();

$prize = 0.00;

if ($place === "Bulgaria") {
    $prize = $pointsCount * $dancersCount;
    if ($season === "summer") {
        $costs = $prize * 0.05;
    } elseif ($season === "winter") {
        $costs = $prize * 0.08;
    }
    $prize -= $costs;
} elseif ($place === "Abroad") {
    $prizeAbroad = $pointsCount * $dancersCount;
    $prize = $prizeAbroad + $prizeAbroad * 0.50;
    if ($season === "summer") {
        $costs = $prize * 0.10;
    } elseif ($season === "winter") {
        $costs = $prize * 0.15;
    }
    $prize -= $costs;
}
    
$charity = $prize * 0.75;
$rest = $prize - $charity;

$moneyPerDancer = $rest / $dancersCount;

echo "Charity - ";
echo number_format($charity, 2, ".", "");
echo "\n";
echo "Money per dancer - ";
echo number_format($moneyPerDancer, 2, ".", "");