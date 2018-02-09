<?php

$n = intval(readline());
$reminder2 = 0;
$reminder3 = 0;
$reminder4 = 0;

for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    if($num % 2 === 0){
        $reminder2 ++;
    }
    if($num % 3 === 0){
        $reminder3 ++;
    }
    if($num % 4 === 0){
        $reminder4 ++;
    } 
}

$reminder2Percent = ($reminder2 / $n) * 100;
$reminder3Percent = ($reminder3 / $n) * 100;
$reminder4Percent = ($reminder4 / $n) * 100;

echo number_format($reminder2Percent, 2, ".", "") . "%\n";
echo number_format($reminder3Percent, 2, ".", "") . "%\n";
echo number_format($reminder4Percent, 2, ".", "") . "%\n";


