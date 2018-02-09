<?php

$n = intval(readline());
$firstSum = 0;
$nextSum = 0;
$diff = 0;
$maxDiff = 0;

for ($i = 0; $i < $n; $i++) {
    $oddNum = intval(readline());
    $evenNum = intval(readline());
    if ($i === 0) {
        $firstSum = $oddNum + $evenNum;
    } else {
        $nextSum = $oddNum + $evenNum;
        $diff = abs($firstSum - $nextSum);

        if ($diff > $maxDiff) {
            $maxDiff = $diff;
        }
        $firstSum = $nextSum;
    }
}

if ($maxDiff === 0) {
    echo "Yes, value=$firstSum";
} else {
    echo "No, maxdiff=$maxDiff";
}