<?php

$parts = intval(readline());
$prizePerPoint = floatval(readline());

$sumPoints = 0;
for ($index = 1; $index <= $parts; $index++) {
    $points = intval(readline());
    if ($index % 2 === 0) {
        $sumPoints += $points * 2;
    } else {
        $sumPoints += $points;
    }
}

$prize = $sumPoints * $prizePerPoint;

echo "The project prize was ". number_format($prize, 2, ".", "")." lv.";

