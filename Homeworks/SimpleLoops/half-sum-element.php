<?php

$n = intval(readline());
$sum = 0;
$max = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if ($num > $max) {
        $max = $num;
    }
    $sum += $num;
}

$halfSum = $sum / 2;

if ($halfSum === $max) {
    echo "Yes\n";
    echo "Sum = ".$max;
} else {
    echo "No\n";
    $restSum = $sum - $max;
    $diff = abs($restSum - $max);
    echo "Diff = ".$diff;
}
    