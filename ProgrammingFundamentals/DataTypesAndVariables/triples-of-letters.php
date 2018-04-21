<?php

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        for ($m = 0; $m < $n; $m++) {
            $letter1 = ord("a") + $i;
            $letter2 = ord("a") + $j;
            $letter3 = ord("a") + $m;
            echo chr($letter1) . chr($letter2) . chr($letter3) . "\n";
        }
    }
}

