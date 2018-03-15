<?php

$count = intval(readline());
$amount = intval(readline());
$sum = 0;
$counter = 0;

for ($index = 0; $index < $count; $index++) {
    $things = strtolower(readline());
    $counter++;
    if($counter > 7){
        echo "Sorry, you can't carry so many things!";
        exit(0);
    }
    if ($things === "ak47") {
        $sum += 2700;
    } elseif ($things === "awp") {
        $sum += 4750;
    } elseif ($things === "sg553") {
        $sum += 3500;
    }  elseif ($things === "grenade") {
        $sum += 300;
    }  elseif ($things === "flash") {
        $sum += 250;
    }  elseif ($things === "glock") {
        $sum += 500;
    }  elseif ($things === "bazooka") {
        $sum += 5600;
    } 
}

$difference = $sum - $amount;
if($amount >= $sum){
    echo "You bought all $counter items! Get to work and defeat the bomb!";
} else{
    echo "Not enough money! You need $difference more money.";
}

