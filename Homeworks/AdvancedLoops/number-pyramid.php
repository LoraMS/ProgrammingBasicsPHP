<?php

$num = intval(readline());
$n = 1;

for ($row = 1; $row <= $num; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        if ($col > 1) {
            echo " ";
        }
        echo $n;
        $n ++;
        if ($n > $num) {
            break;
        }
    }
    echo "\n";
    if ($n > $num) {
            break;
        }
}

