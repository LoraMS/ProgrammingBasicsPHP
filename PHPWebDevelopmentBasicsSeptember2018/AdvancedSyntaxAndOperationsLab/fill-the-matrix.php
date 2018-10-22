<?php

$input = explode(', ', readline());
$size = intval($input[0]);
$type = $input[1];
$temp = 0;

if ($type === 'A') {
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            echo ($j + $temp);
            $temp += ($size - 1);
        }
        echo PHP_EOL;
        $temp = $i;
    }
} elseif ($type === 'B') {
//    for ($i = 1; $i <= $size; $i++) {
//        for ($j = 1; $j <= $size; $j++) {
//            echo ($j + $temp) . " ";
//            if ($i % 2 == 0) {
//                $temp = $size - $i + 1;
//            } else {
//                $temp = $size + 1;
//            }
//        }
//        echo PHP_EOL;
//        if ($i % 2 == 0) {
//            $temp = $i;
//        } else {
//            $temp = $i;
//        }
//    }
}
