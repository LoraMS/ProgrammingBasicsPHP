<?php

$n = intval(readline());
$oddSum = 0;
$oddMin = PHP_INT_MAX;
$oddMax = PHP_INT_MIN;
$evenSum = 0;
$evenMin = PHP_INT_MAX;
$evenMax = PHP_INT_MIN;

for ($i = 1; $i <= $n; $i++) {
    $num = floatval(readline());
    if ($i % 2 === 0) {
        $evenSum += $num;
        if ($num > $evenMax) {
            $evenMax = $num;
        }
        if ($num < $evenMin) {
            $evenMin = $num;
        }
    } else {
        $oddSum += $num;
         if ($num > $oddMax) {
            $oddMax = $num;
        }
        if ($num < $oddMin) {
            $oddMin = $num;
        }
    } 
}

echo "OddSum=$oddSum,\n";
if ($oddMin !== PHP_INT_MAX) {
    echo "OddMin=$oddMin\n";
} else {
    echo "OddMin=No,\n";
}
if ($oddMax !== PHP_INT_MIN) {
    echo "OddMax=$oddMax,\n";
} else {
    echo "OddMax=No,\n";
}

echo "EvenSum=$evenSum,\n";
if ($evenMin !== PHP_INT_MAX) {
    echo "EvenMin=$evenMin\n,";
} else {
    echo "EvenMin=No,\n";
}
if ($evenMax !== PHP_INT_MIN) {
    echo "EvenMax=$evenMax,\n";
} else {
    echo "EvenMax=No\n";
}

