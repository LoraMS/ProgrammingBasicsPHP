<?php

$firstNumber = intval(fgets(STDIN));
$secondNumber = intval(fgets(STDIN));

if($firstNumber < $secondNumber){
    $start = $firstNumber;
    $end = $secondNumber;
} else {
    $start = $secondNumber;
    $end = $firstNumber;
}

for($i = $start; $i <= $end; $i++){
    echo "$i\n";
}