<?php

$years = intval(readline());
$priceWashingMashine = floatval(readline());
$priceToy = floatval(readline());

$toysCount = 0;
$moneyGift = 0;
$moneyToken = 0;
$sum = 0;

for ($i = 1; $i <= $years; $i++) {
    if($i % 2 === 0){
        $moneyGift += 10;
        $moneyToken ++;
        $sum += $moneyGift;
    } else{
        $toysCount ++;
    }
}

$toysMoney = $toysCount * $priceToy;
$sumLeft = $sum - $moneyToken;

$all = $toysMoney + $sumLeft;
$diff = abs($all-$priceWashingMashine);

if($all >= $priceWashingMashine){
    echo "Yes! ";
    echo number_format($diff, 2, ".", "");
    // echo "Yes! " . number_format(abs($all - $priceWashingMashine), 2, '.', '');
} else {
    echo "No! ";
    echo number_format($diff, 2, ".", "");
    // echo "No! " . number_format(abs($all - $priceWashingMashine), 2, '.', '');
}
