<?php

$amount = floatval(readline());
$counter = 0;

while (round($amount, 2) > 0.00) {
    if (round($amount, 2) >= 2.00) {
        $amount -= 2.00;
        $counter ++;
    } elseif (round($amount, 2) >= 1.00) {
        $amount -= 1.00;
        $counter ++;
    } elseif (round($amount, 2) >= 0.50) {
        $amount -= 0.50;
        $counter ++;
    } elseif (round($amount, 2) >= 0.20) {
        $amount -= 0.20;
        $counter ++;
    } elseif (round($amount, 2) >= 0.10) {
        $amount -= 0.10;
        $counter ++;
    } elseif (round($amount, 2) >= 0.05) {
        $amount -= 0.05;
        $counter ++;
    } elseif (round($amount, 2) >= 0.02) {
        $amount -= 0.02;
        $counter ++;
    } elseif (round($amount, 2) >= 0.01) {
        $amount -= 0.01;
        $counter ++;
    }
}

echo $counter;
