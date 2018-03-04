<?php

$start = intval(readline());
$end = intval(readline());
$magicNumber = intval(readline());

$counter = 0;
$combination = 0;
$isEqual = false;

for ($i = $start; $i <= $end; $i++) {
    for ($j = $start; $j <= $end; $j++) {
        $counter ++;
        if ($i + $j === $magicNumber) {
            $combination = $counter;
            $isEqual = true;
            break;
        } else {
            $isEqual = false;
        }
    }
    if ($isEqual) {
        break;
    }
}

if ($isEqual) {
    echo "Combination N:$combination ($i + $j = $magicNumber)";
} else {
    echo "$counter combinations - neither equals $magicNumber";
}