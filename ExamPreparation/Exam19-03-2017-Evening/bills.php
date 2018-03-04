<?php

$months = intval(readline());
$water = 20.00;
$net = 15.00;
$other = 0;
$electricityAll = 0;
$waterAll = $water * $months;
$netAll = $net * $months;

for ($index = 0; $index < $months; $index++) {
    $electricity = floatval(readline());
    $other += ($water + $net + $electricity) + ($water + $net + $electricity) * 0.20;
    $electricityAll += $electricity;
}

$average = ($electricityAll + $waterAll + $netAll + $other)/$months;

echo "Electricity: ". number_format($electricityAll, 2, ".", "")." lv\n";
echo "Water: ". number_format($waterAll, 2, ".", "")." lv\n";
echo "Internet: ". number_format($netAll, 2, ".", "")." lv\n";
echo "Other: ". number_format($other, 2, ".", "")." lv\n";
echo "Average: ". number_format($average, 2, ".", "")." lv";