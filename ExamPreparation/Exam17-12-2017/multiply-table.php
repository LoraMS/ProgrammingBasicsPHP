<?php

$n = intval(readline());

$first = floor($n / 100) % 10;
$second = floor($n / 10) % 10;
$third = $n % 10;

for ($i = 1; $i <= $third; $i++) {
    for ($j = 1; $j <= $second; $j++) {
        for ($p = 1; $p <= $first; $p++) {
            if ($i !== 0 && $j !== 0 && $p !== 0) {
                $result = $i*$j*$p;
                echo "$i * $j * $p = $result;\n";
            }
        }
    }
}