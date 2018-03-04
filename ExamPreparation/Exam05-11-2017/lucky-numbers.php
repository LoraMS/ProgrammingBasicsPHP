<?php

$n = intval(readline());

for ($a = 1; $a <= 9; $a++) {
    for ($b = 1; $b <= 9; $b++) {
        for ($c = 1; $c <= 9; $c++) {
            for ($d = 1; $d <= 9; $d++) {
                if($a + $b === $c + $d && $n % ($a + $b) === 0){
                    echo "$a$b$c$d ";
                }
            }
        }
    }
}
