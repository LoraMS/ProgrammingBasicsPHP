<?php

$input = fgets(STDIN);
$arr = explode(", ", $input);
$sum = [];

for ($i = 0; $i < count($arr); $i += 2) {
    $town = $arr[$i];
    $income = $arr[$i + 1];
//    list($town, $income) = [$arr[$i], $arr[$i+1]];
    if(!isset($sum[$town])){
        $sum[$town] = $income;
    }
    else {
        $sum[$town] += $income;
    }
}

echo "<pre>";
print_r($sum);
echo "</pre>";