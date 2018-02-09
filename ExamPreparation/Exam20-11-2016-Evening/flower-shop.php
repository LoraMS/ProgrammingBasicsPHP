<?php

$magnolias = readline();
$zFlowers = readline();
$roses = readline();
$cactuses = readline();
$giftPrice = readline();

$magnoliasPrise = 3.25;
$zFlowersPrice = 4;
$rosesPrice = 3.50;
$cactusesPrice = 8;

$amount = $magnolias * $magnoliasPrise + $zFlowers * $zFlowersPrice + $roses * $rosesPrice + $cactuses * $cactusesPrice;
$taxes = $amount * 0.05;
$profit = $amount - $taxes;

if ($profit >= $giftPrice) {
    echo "She is left with " . floor($profit - $giftPrice) . " leva.";
} else {
    echo "She will have to borrow " . ceil($giftPrice - $profit) . " leva.";
}