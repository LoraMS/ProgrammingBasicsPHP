<?php

$input = readline();
$arr = explode(" ", $input);

$min = min($arr);
$max = max($arr);
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}

$average = $sum / count($arr);

echo "Min = $min\n";
echo "Max = $max\n";
echo "Sum = $sum\n";
echo "Average = $average";