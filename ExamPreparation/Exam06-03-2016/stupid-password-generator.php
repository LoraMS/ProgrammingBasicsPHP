<?php

$n = intval(readline());
$l = intval(readline());

$password = "";

for ($number1 = 1; $number1 < $n; $number1++) {
    for ($number2 = 1; $number2 < $n; $number2++) {
        for ($letter1 = ord("a"); $letter1 < ord("a") + $l; $letter1++) {
            for ($letter2 = ord("a"); $letter2 < ord("a") + $l; $letter2++) {
                for ($number3 = 1; $number3 <= $n; $number3++) {
                    if ($number3 > $number1 && $number3 > $number2) {
                        $lastNumber = $number3;
                        $password .= "$number1" . "$number2" . chr($letter1) . chr($letter2) . "$lastNumber"." ";
                    }
                }
            }
        }
    }
}

echo $password;