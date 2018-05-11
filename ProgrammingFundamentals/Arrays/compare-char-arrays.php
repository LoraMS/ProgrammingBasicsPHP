<?php

$input1 = readline();
$input2 = readline();

$arr1 = explode(" ", $input1);
$arr2 = explode(" ", $input2);

$len1 = count($arr1);
$len2 = count($arr2);
$len = min($len1, $len2);

//if ($len1 > $len2) {
//    echo implode("", $arr2);
//    echo "\n";
//    echo $input1;
//} elseif ($len1 < $len2) {
//    echo implode("", $arr1);
//    echo "\n";
//    echo implode("", $arr2);
//} else {
for ($i = 0; $i < $len; $i++) {
    if ($arr1[$i] > $arr2[$i]) {
        echo implode("", $arr2);
        echo "\n";
        echo implode("", $arr1);
        break;
    } else if ($arr1[$i] < $arr2[$i]) {
        echo implode("", $arr1);
        echo "\n";
        echo implode("", $arr2);
        break;
    } else {
        if ($len == $len2 && $i == $len - 1) {
            echo implode("", $arr2);
            echo "\n";
            echo implode("", $arr1);
        } else if ($len == $len1 && $i == $len - 1) {
            echo implode("", $arr1);
            echo "\n";
            echo implode("", $arr2);
        } else {
            continue;
        }
    }
}
//}