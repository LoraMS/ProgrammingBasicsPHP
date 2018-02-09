<?php

$n = intval(readline());
$leftSum = 0;
$rightSum = 0;

for ($i = 0; $i < $n; $i++) {
    $leftNum = intval(readline());
    $leftSum += $leftNum;
}

for ($i = 0; $i < $n; $i++) {
    $rightNum = intval(readline());
    $rightSum += $rightNum;
}

if ($leftSum - $rightSum === 0) {
    echo "Yes, sum = $leftSum";
} else {
    echo "No, diff = ".abs($leftSum - $rightSum);

}

