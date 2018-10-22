<?php

$input = intval(readline());
$rows = $input[0];
$cols = $input[1];

//for ($i = 0; $i < $rows; $i++) {
//    $matrix[$i] = array_map('intval', explode(', ', readline()));
//}
//
//$mainSum = $matrix[0][0];
//$secondarySum = $matrix[0][0];
//
//for ($row = 0; $row < count($matrix); $row++) {
//    $mainSum += $matrix[$row][$row];
//    $secondarySum += $matrix[$row][count($matrix) - $row - 1];
//}
//
//$sum =  abs($mainSum - $secondarySum);
//echo $sum;