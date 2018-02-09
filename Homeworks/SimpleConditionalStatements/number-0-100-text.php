<?php

$num = intval(readline());

//if ($num > 0 && $num < 10) {
//    switch ($num) {
//        case 1: echo 'one';
//            break;
//        case 2: echo 'two';
//            break;
//        case 3: echo 'three';
//            break;
//        case 4: echo 'four';
//            break;
//        case 5: echo 'five';
//            break;
//        case 6: echo 'six';
//            break;
//        case 7: echo 'seven';
//            break;
//        case 8: echo 'eight';
//            break;
//        case 9: echo 'nine';
//            break;
//    }
//} elseif ($num >= 10 && $num < 20) {
//    switch ($num) {
//        case 10: echo 'ten';
//            break;
//        case 11: echo 'eleven';
//            break;
//        case 12: echo 'twelve';
//            break;
//        case 13: echo 'thirteen';
//            break;
//        case 14: echo 'fourteen';
//            break;
//        case 15: echo 'fifteen';
//            break;
//        case 16: echo 'sixteen';
//            break;
//        case 17: echo 'seventeen';
//            break;
//        case 18: echo 'eighteen';
//            break;
//        case 19: echo 'nineteen';
//            break;
//    }
//} elseif ($num >= 20 && $num < 100) {
//    $tens = floor($num / 10);
//    $units = $num % 10;
//    switch ($tens) {
//        case 2: echo 'twenty';
//            break;
//        case 3: echo 'thirty';
//            break;
//        case 4: echo 'forty';
//            break;
//        case 5: echo 'fifty';
//            break;
//        case 6: echo 'sixty';
//            break;
//        case 7: echo 'seventy';
//            break;
//        case 8: echo 'eighty';
//            break;
//        case 9: echo 'ninety';
//            break;
//    }
//    switch ($units) {
//        case 1: echo ' one';
//            break;
//        case 2: echo ' two';
//            break;
//        case 3: echo ' three';
//            break;
//        case 4: echo ' four';
//            break;
//        case 5: echo ' five';
//            break;
//        case 6: echo ' six';
//            break;
//        case 7: echo ' seven';
//            break;
//        case 8: echo ' eight';
//            break;
//        case 9: echo ' nine';
//            break;
//    }
//} elseif ($num === 100) {
//    echo 'one hundred';
//} elseif ($num === 0) {
//    echo 'zero';
//} else {
//    echo 'invalid number';
//}

$unitsAsWord = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
$tensAsWord = ["twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];

$units = $num % 10;
$tens = floor($num / 10);

if ($num >= 0 && $num < 20) {
    echo $unitsAsWord[$num];
} elseif ($num >= 20 && $num < 100) {
    if ($units === 0) {
        echo $tensAsWord[$tens - 2];
    } else {
        echo $tensAsWord[$tens - 2] . " ";
        echo $unitsAsWord[$units];
    }
} elseif ($num === 100) {
    echo 'one hundred';
} else {
    echo 'invalid number';
}

