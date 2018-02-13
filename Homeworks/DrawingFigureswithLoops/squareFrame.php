<?php

$n = intval(readline());

echo "+ " . str_repeat("- ", $n - 2) . "+" . "\n";

//for ($index = 1; $index <= $n-2; $index++) {
//    echo "| ".str_repeat("- ", $n-2)."|"."\n";
//}

for ($row = 1; $row <= $n - 2; $row++) {
    echo "| ";
    for ($col = 1; $col <= $n - 2; $col++) {
        echo "- ";
    }
    echo "|";
    echo "\n";
}

echo "+ " . str_repeat("- ", $n - 2) . "+";
