<?php

$startFirstPair = intval(readline());
$startSecondPair = intval(readline());
$firstDifference = intval(readline());
$secondDifference = intval(readline());

$endFirstPair = $startFirstPair + $firstDifference;
$endSecondPair = $startSecondPair + $secondDifference;

for ($i = $startFirstPair; $i <= $endFirstPair; $i++) {
    for ($j = $startSecondPair; $j <= $endSecondPair; $j++) {
        $firstPrimePair = true;
        for ($m = 2; $m <= sqrt($i); $m++) {
            if ($i % $m == 0) {
                $firstPrimePair = false;
            }
        }
        $secondPrimePair = true;
        for ($n = 2; $n <= sqrt($j); $n++) {
            if ($j % $n == 0) {
                $secondPrimePair = false;
            }
        }

        if ($firstPrimePair==true && $secondPrimePair==true) {
            echo "$i$j\n";
        }
    }
}