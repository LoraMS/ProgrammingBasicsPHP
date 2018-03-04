<?php

$oneLev = intval(readline());
$twoLevs = intval(readline());
$fiveLevs = intval(readline());
$amount = intval(readline());

for ($i = 0; $i <= $oneLev; $i++) {
    for ($j = 0; $j <= $twoLevs; $j++) {
        for ($p = 0; $p <= $fiveLevs; $p++) {
            if (1*$i + 2*$j + 5*$p === $amount) {
                echo "$i * 1 lv. + $j * 2 lv. + $p * 5 lv. = $amount lv.\n";
            }
        }
    }
}

