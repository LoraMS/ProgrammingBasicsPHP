<?php

$num = readline();
$firstMetric = strtolower(readline());
$secondMetric = strtolower(readline());

$convertValue = 0.0;
$result = 0.0;

if ($firstMetric === "mm") {
    $convertValue = $num / 1000;
} elseif ($firstMetric === "cm") {
    $convertValue = $num / 100;
} elseif ($firstMetric === "mi") {
    $convertValue = $num / 0.000621371192;
} elseif ($firstMetric === "in") {
    $convertValue = $num / 39.3700787;
} elseif ($firstMetric === "km") {
    $convertValue = $num / 0.001;
} elseif ($firstMetric === "ft") {
    $convertValue = $num / 3.2808399;
} elseif ($firstMetric === "yd") {
    $convertValue = $num / 1.0936133;
} elseif ($firstMetric === "m") {
    $convertValue = $num / 1;
}


if ($secondMetric === "mm") {
    $result = $convertValue * 1000;
} elseif ($secondMetric === "cm") {
    $result = $convertValue * 100;
} elseif ($secondMetric === "mi") {
    $result = $convertValue * 0.000621371192;
} elseif ($secondMetric === "in") {
    $result = $convertValue * 39.3700787;
} elseif ($secondMetric === "km") {
    $result = $convertValue * 0.001;
} elseif ($secondMetric === "ft") {
    $result = $convertValue * 3.2808399;
} elseif ($secondMetric === "yd") {
    $result = $convertValue * 1.0936133;
} elseif ($secondMetric === "m") {
    $result = $convertValue * 1;
}

echo number_format($result, 8, ".", "");

//printf("%0.8f", $result);


//$amaunt = readline();
//$firstMetric = readline();
//$secondMetric = readline();
// 
// $currencies = ["m" => 1,"mm" => 1000,"cm" => 100,"mi" => 0.000621371192,"in" => 39.3700787,"km" => 0.001,"ft" => 3.2808399,"yd" => 1.0936133];
//$result = ($currencies[$secondMetric] / $currencies[$firstMetric]) * $amaunt;
// 
//echo number_format($result,8, '.', '');