<?php

$n = intval(readline());

for ($row = 1; $row <= $n; $row++) {
    echo str_repeat(" ", $n - $row)."*";
    for ($col = 1; $col <= $row - 1; $col++) {
        echo " *";
    }
    echo "\n";
}

for ($rowUnder = 1; $rowUnder <= $n-1; $rowUnder++) {
    echo str_repeat(" ", $rowUnder)."*";
    for ($colUnder = $n - $rowUnder - 1; $colUnder >= 1; $colUnder--) {
         echo " *";
    }
    echo "\n";
}
