<?php

$processorPriceUSD = floatval(readline());
$videocardPriceUSD = floatval(readline());
$ramPriceUSD = floatval(readline());
$ramCount = intval(readline());
$discountPercent = floatval(readline());

$processorPriceBGN = $processorPriceUSD * 1.57;
$videocardPriceBGN = $videocardPriceUSD * 1.57;
$ramPriceBGN = $ramPriceUSD * 1.57;
$ramPrice = $ramPriceBGN * $ramCount;
$processorPrice = $processorPriceBGN - $processorPriceBGN * $discountPercent;
$videocardPrice = $videocardPriceBGN - $videocardPriceBGN * $discountPercent;
$price = $processorPrice + $videocardPrice + $ramPrice;

echo "Money needed - ". number_format($price, 2, ".", "")." leva.";

