<?php

//1.
$num = intval(readline());

for ($index = 1; $index <= 10; $index++) {
    echo "$num X $index = " . $num * $index . "\n";
}

//2.
$n = intval(readline());
$m = intval(readline());

if ($m > 10) {
    echo "$n X $m = " . $n * $m;
} else {
    for ($index1 = $m; $index1 <= 10; $index1++) {
        echo "$n X $index1 = " . $n * $index1 . "\n";
    }
}
