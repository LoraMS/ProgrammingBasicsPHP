<?php

$input = readline();
$arr = array_map('intval', explode(' ', $input));
$isSum = false;

//for ($i = 0; $i < count($arr); $i++) {
//    for ($j = 0; $j < count($arr); $j++) {
//        for ($n = 0; $n < count($arr); $n++) {
//            if($i >= 0 && $i < $j && $j < count($arr) && $arr[$i] + $arr[$j] === $arr[$n]){
//                echo "$arr[$i] + $arr[$j] == $arr[$n]\n";
//                $isSum = true;
//                break;
//            }
//        }
//    }
//}

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        $sum = $arr[$i] + $arr[$j];
        if (in_array($sum, $arr)) {
            echo "$arr[$i] + $arr[$j] == $sum\n";
            $isSum = true;
        }
    }
}

if (!$isSum) {
    echo 'No';
}

