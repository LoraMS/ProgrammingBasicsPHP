<?php

$upperHunderts = intval(readline());
$upperDecimals = intval(readline());
$upperUnits = intval(readline());

for ($i = 2; $i <= $upperHunderts; $i++) {
    for ($j = 2; $j <= $upperDecimals; $j++) {
        for ($k = 2; $k <= $upperUnits; $k++) {
            if (($k%2 == 0) && ($i%2 == 0) && (($j == 2) || ($j == 3) || ($j == 5) || ($j == 7))) {
                echo "$i $j $k\n";
            }
        }
    }
}

//for ($i = 2; $i <= $upperHunderts; $i++) {
//    for ($j = 2; $j <= $upperDecimals; $j++) {
//        $counter = 0;
//
//        for ($p = 1; $p <= $j; $p++) {
//            if ($j % $p == 0) {
//                $counter++;
//            }
//        }
//
//        for ($k = 2; $k <= $upperUnits; $k++) {
//            if (($k % 2 == 0) && ($i % 2 == 0) && ($counter == 2)) {
//                echo "$i $j $k\n";
//            }
//        }
//    }
//}

