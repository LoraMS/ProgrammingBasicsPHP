<?php

$wineyeardArea = intval(readline());
$grape = floatval(readline());
$wineNeeded = intval(readline());
$workersCount = intval(readline());

$grapeAll = $wineyeardArea * $grape;
$grapeForWine = $grapeAll * 0.4;
$wineProduced = $grapeForWine / 2.5;

if ($wineProduced < $wineNeeded) {
    $wineResult = floor($wineNeeded - $wineProduced);
    echo "It will be a tough winter! More $wineResult liters wine needed.";
} else {
   echo "Good harvest this year! Total wine: ".floor($wineProduced)." liters.";
    $wineLeft = ceil($wineProduced - $wineNeeded);
    $winePerWorker = ceil($wineLeft / $workersCount);
    echo "\n";
    echo "$wineLeft liters left -> $winePerWorker liters per person.";
}