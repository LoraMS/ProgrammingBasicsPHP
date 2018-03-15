<?php

$n = intval(readline());
$digits = 0;
$bigLetters = 0;
$smallLetters = 0;
$other = 0;
$combinationDigits = "";
$combinationBigLetters = "";
$combinationSmallLetters = "";
$combinationOther = "";

for ($index = 0; $index < $n; $index++) {
    $symbol = readline();
    $num = ord($symbol);
    if ($num >= 48 && $num <= 57) {
        $digits += $num;
        $combinationDigits .= $symbol;
    } elseif ($num >= 65 && $num <= 90) {
        $bigLetters += $num;
        $combinationBigLetters .= $symbol;
    } elseif ($num >= 97 && $num <= 122) {
        $smallLetters += $num;
        $combinationSmallLetters .= $symbol;
    } else {
        $other += $num;
        $combinationOther .= $symbol;
    }
}

//$max = max($digits, $bigLetters, $smallLetters, $other);
//
//if ($max === $other) {
//    $combination = $combinationOther;
//}
//if ($max === $smallLetters) {
//    $combination = $combinationSmallLetters;
//}
//if($max === $bigLetters){
//    $combination = $combinationBigLetters;
//}
//if ($max === $digits) {
//    $combination = $combinationDigits;
//} 

$max = $other;
$combination = $combinationOther;
if ($smallLetters >= $max) {
    $max = $smallLetters;
    $combination = $combinationSmallLetters;
}
if($bigLetters >= $max){
    $max = $bigLetters;
    $combination = $combinationBigLetters;
}
if ($digits >= $max) {
    $max = $digits;
    $combination = $combinationDigits;
} 

echo "Biggest ASCII sum is:".$max."\n";
echo "Combination of characters is:".$combination;

