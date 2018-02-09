<?php

$n = intval(readline());
$under200 = 0;
$under399 = 0;
$under599 = 0;
$under799 = 0;
$up800 = 0;

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if($num < 200){
        $under200 ++;
    } elseif($num >= 200 && $num < 400){
        $under399 ++;
    } elseif($num >= 400 && $num < 600){
        $under599 ++;
    } elseif($num >= 600 && $num < 800){
        $under799 ++;
    } elseif($num >= 800){
        $up800 ++;
    }
}

$under200Percent = ($under200 / $n) * 100;
$under399Percent = ($under399 / $n) * 100;
$under599Percent = ($under599 / $n) * 100;
$under799Percent = ($under799 / $n) * 100;
$up800Percent = ($up800 / $n) * 100;

printf("%.2f%%\n", $under200Percent);
printf("%.2f%%\n", $under399Percent);
printf("%.2f%%\n", $under599Percent);
printf("%.2f%%\n", $under799Percent);
printf("%.2f%%\n", $up800Percent);

//echo number_format($under200Percent, 2, '.', '').'%' . "\n";
//echo number_format($under399Percent, 2, '.', '').'%' . "\n";
//echo number_format($under599Percent, 2, '.', '').'%' . "\n";
//echo number_format($under799Percent, 2, '.', '').'%' . "\n";
//echo number_format($up800Percent, 2, '.', '').'%';