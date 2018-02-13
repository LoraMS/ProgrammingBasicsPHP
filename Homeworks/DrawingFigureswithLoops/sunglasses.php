<?php

$n = intval(readline());

echo str_repeat("*", 2 * $n);
echo str_repeat(" ", $n);
echo str_repeat("*", 2 * $n);
echo "\n";

for ($i = 1; $i <= $n - 2; $i++) {
    echo "*";
    echo str_repeat("/", 2 * $n - 2);
    echo "*";
    if ($n % 2 === 0 && $i === $n/2 - 1) {
        echo str_repeat("|", $n);
    } elseif ($n % 2 !== 0 && $i === ($n - 1) / 2 ) {
        echo str_repeat("|", $n);
    } else{
        echo str_repeat(" ", $n);
    }
    
    echo "*";
    echo str_repeat("/", 2 * $n - 2);
    echo "*";
    echo "\n";
}

echo str_repeat("*", 2 * $n);
echo str_repeat(" ", $n);
echo str_repeat("*", 2 * $n);
