<?php

$n = intval(readline());
$oddSum = 0;
$evenSum = 0;

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if ($i % 2 === 0) {
        $evenSum += $num;
    } else {
        $oddSum += $num;
    }
}


if ($oddSum - $evenSum === 0) {
    echo "Yes, Sum = $oddSum";
} else {
    echo "No, Diff = ".abs($oddSum - $evenSum);

}

