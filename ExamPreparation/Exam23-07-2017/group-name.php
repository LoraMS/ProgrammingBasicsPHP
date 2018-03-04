<?php

$firstLetter = readline();
$secondLetter = readline();
$thirdLetter = readline();
$fourthLetter = readline();
$digit = intval(readline());

$counter = 0;

for ($i = ord("A"); $i <= ord($firstLetter); $i++) {
    for ($j = ord("a"); $j <= ord($secondLetter); $j++) {
        for ($m = ord("a"); $m <= ord($thirdLetter); $m++) {
            for ($n = ord("a"); $n <= ord($fourthLetter); $n++) {
                for ($p = 0; $p <= $digit; $p++) {
                    $counter ++;
                }
            }
        }
    }
}

$counter--;
echo $counter;
