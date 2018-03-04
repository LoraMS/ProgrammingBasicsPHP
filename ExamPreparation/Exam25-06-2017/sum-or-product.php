<?php

$n = intval(readline());
$print = false;

for ($a = 1; $a <= 30; $a++) {
    for ($b = 1; $b <= 30; $b++) {
        for ($c = 1; $c <= 30; $c++) {
            if ($a < $b && $b < $c && $a + $b + $c == $n) {
                echo "$a + $b + $c = $n\n";
                $print = true;
            }
            if ($a > $b && $b > $c && $a * $b * $c == $n) {
                echo "$a * $b * $c = $n\n";
                $print = true;
            }
        }
    }
}

if ($print == 0) {
    echo 'No!';
}
