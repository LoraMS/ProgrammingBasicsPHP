<?php

$budget = floatval(readline());
$chocolatesCount = intval(readline());
$milkQuantity = floatval(readline());
$tangerineCount = floor($chocolatesCount -$chocolatesCount*0.35);

$amount = $chocolatesCount * 0.65 + $milkQuantity * 2.70 + $tangerineCount * 0.20;
$difference = abs($budget - $amount);

if($budget >= $amount){
    echo "You got this, ". number_format($difference, 2, ".", "")." money left!";
} else {
    echo "Not enough money, you need ". number_format($difference, 2, ".", "")." more!";
}

