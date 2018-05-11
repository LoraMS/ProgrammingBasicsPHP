<?php

$input = readline();
$arr = explode(" ", $input);
$num = intval(readline());

$reversed = array_reverse($arr);
$sum = 0;
$index = 0;
$occurrence = false;

for ($i = 0; $i < count($reversed); $i++) {
    if($num === intval($reversed[$i])){
        $index = $i;
        $occurrence = true;
        break;
   }
}

for ($j = $index+1; $j < count($reversed); $j++) {
    $sum += $reversed[$j];
}

if($occurrence){
    echo $sum;
} else{
    echo "No occurrences were found!";
    }

