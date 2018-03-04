<?php

$moves = intval(readline());
$result = 0;
$between0And9 = 0;
$between10And19 = 0;
$between20And29 = 0;
$between30And39 = 0;
$between40And49 = 0;
$moreThan50AndLessThan0 = 0;


for ($index = 0; $index < $moves; $index++) {
    $number = intval(readline());
    if ($number >= 0 && $number < 10) {
        $result += $number*0.20;
        $between0And9++;
    } elseif ($number >= 10 && $number < 20) {
        $result += $number*0.30;
        $between10And19++;
    } elseif ($number >= 20 && $number < 30) {
        $result += $number*0.40;
        $between20And29++;
    } elseif ($number >= 30 && $number < 40) {
        $result += 50;
        $between30And39++;
    } elseif ($number >= 40 && $number <= 50) {
        $result += 100;
        $between40And49++;
    } else {
        $result /= 2;
        $moreThan50AndLessThan0++;
    }
}

$between0And9Percent = $between0And9/$moves * 100;
$between10And19Percent = $between10And19/$moves * 100;
$between20And29Percent = $between20And29/$moves * 100;
$between30And39Percent = $between30And39/$moves * 100;
$between40And49Percent = $between40And49/$moves * 100;
$moreThan50AndLessThan0Percent = $moreThan50AndLessThan0/$moves * 100;

echo number_format($result, 2, ".", "")."\n";
echo "From 0 to 9: ".number_format($between0And9Percent, 2, ".", "")."%\n";
echo "From 10 to 19: ".number_format($between10And19Percent, 2, ".", "")."%\n";
echo "From 20 to 29: ".number_format($between20And29Percent, 2, ".", "")."%\n";
echo "From 30 to 39: ".number_format($between30And39Percent, 2, ".", "")."%\n";
echo "From 40 to 50: ".number_format($between40And49Percent, 2, ".", "")."%\n";
echo "Invalid numbers: ".number_format($moreThan50AndLessThan0Percent, 2, ".", "")."%\n";
