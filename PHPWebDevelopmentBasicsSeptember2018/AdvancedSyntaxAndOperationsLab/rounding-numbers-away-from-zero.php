<?php

//$input = readline();
//$array = explode(' ', $input);
//
//for ($i = 0; $i < count($array); $i++) {
//    echo "$array[$i] => ".round(floatval($array[$i]) , 0 ,PHP_ROUND_HALF_UP).PHP_EOL;
//}


$input = readline();
$array = explode(' ', $input);

for ($i = 0; $i < count($array); $i++) {
    $element = abs(floatval($array[$i]));
    $element += 0.5;
    if($array[$i] >= 0){
        echo "$array[$i] => ".intval($element).PHP_EOL;
    } else {
        echo "$array[$i] => -".intval($element).PHP_EOL;
    }
}