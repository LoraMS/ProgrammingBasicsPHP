<?php

$money = floatval(readline());
$year = intval(readline());
$age = 18;

for ($index = 1800; $index <= $year; $index++) {
    if ($index % 2 === 0) {
        $money -= 12000;
    } else {
        $money -= (12000 + 50*$age);
    }
    $age ++;
}

if($money >= 0){
    echo "Yes! He will live a carefree life and will have ". number_format($money, 2, ".", "")." dollars left.";
} else{
    echo "He will need ". number_format(abs($money), 2, ".", "")." dollars to survive.";
}