<?php

$n = intval(readline());

//for ($index = 1; $index <= $n; $index++) {
//    echo str_repeat("$ ", $index)."\n";
//}

for ($row = 1; $row <= $n; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "$ ";
    }
    echo "\n";
}