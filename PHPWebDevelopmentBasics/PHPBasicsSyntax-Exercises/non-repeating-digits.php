<?php

$n = trim(fgets(STDIN));
$uniqueNumbers = [];
for ($number = 100; $number <= $n; $number++) {
    if (unique($number)) {
        array_push($uniqueNumbers, $number);
    }
}
echo !sizeof($uniqueNumbers) == 0 ? implode(', ', $uniqueNumbers) : 'No';
function unique (string $num) {
    $currentNum = [];
    for ($i = 0; $i < strlen($num); $i++) {
        $testNum = $num[$i];
        if (in_array($testNum, $currentNum)) {
            return false;
        }
        array_push($currentNum, $testNum);
    }
    return true;
}