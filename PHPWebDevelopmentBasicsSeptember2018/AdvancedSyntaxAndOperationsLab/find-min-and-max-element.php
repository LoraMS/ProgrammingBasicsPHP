<?php

$input = explode(', ', readline());
$rows = $input[0];
$cols = $input[1];

for ($i = 0; $i < $rows; $i++){
    $matrix[$i] = array_map('intval', explode(', ', readline()));
}

$biggestNum = $matrix[0][0];
$smallestNum = $matrix[0][0];
foreach ($matrix as $row) {
    foreach ($row as $cols) {
        if ($cols > $biggestNum) {
            $biggestNum = $cols;
        }
        if($smallestNum > $cols){
            $smallestNum = $cols;
        }
    } 
}

echo "Min: $smallestNum\n";
echo "Max: $biggestNum";