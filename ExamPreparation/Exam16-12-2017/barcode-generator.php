<?php

$start = intval(readline());
$end = intval(readline());

$firstStart = floor($start / 1000) % 10;
$secondStart = floor($start / 100) % 10;
$thirdStart = floor($start / 10) % 10;
$forthStart = $start % 10;
$firstEnd = floor($end / 1000) % 10;
$secondEnd = floor($end / 100) % 10;
$thirdEnd = floor($end / 10) % 10;
$forthEnd = $end % 10;

for ($i = $firstStart; $i <= $firstEnd; $i++) {
    for ($j = $secondStart; $j <= $secondEnd; $j++) {
        for ($m = $thirdStart; $m <= $thirdEnd; $m++) {
            for ($n = $forthStart; $n <= $forthEnd; $n++) {
                if ($i % 2 !== 0 && $j % 2 !== 0 && $m % 2 !== 0 && $n % 2 !== 0) {
                    echo "$i$j$m$n ";
                }
            }
        }
    }
}
