<?php

$raspberries = intval(readline());
$strawberries = intval(readline());
$cherries = intval(readline());
$juice = intval(readline());

$max = 0;
$raspberriesCount = 0;
$strawberriesCount = 0;
$cherriesCount = 0;

for ($r = 0; $r <= $raspberries; $r++) {
    for ($s = 0; $s <= $strawberries; $s++) {
        for ($c = 0; $c <= $cherries; $c++) {
            $sum = 4.5*$r + 7.5*$s + 15*$c;
            if ($sum <= $juice) {
                if ($sum > $max) {
                    $max = $sum;
                    $raspberriesCount = $r;
                    $strawberriesCount = $s;
                    $cherriesCount = $c;
                }
            }
        }
    }
}

echo "$raspberriesCount Raspberries, $strawberriesCount Strawberries, $cherriesCount Cherries. Juice: $max ml.";
