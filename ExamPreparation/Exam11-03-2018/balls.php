<?php

$balls = intval(readline());
$red = 0;
$orange = 0;
$yellow = 0;
$white = 0;
$black = 0;
$points = 0;
$other = 0;

for ($index = 0; $index < $balls; $index++) {
    $color = strtolower(readline());
    if($color === "red"){
        $points += 5;
        $red ++;
    } elseif($color === "orange"){
        $points += 10;
        $orange ++;
    } elseif($color === "yellow"){
        $points += 15;
        $yellow ++;
    } elseif($color === "white"){
        $points += 20;
        $white ++;
    } elseif($color === "black"){
        $points /= 2;
        $black ++;
    } else{
        $other ++;
    }
}

echo "Total points: ".floor($points)."\n";
echo "Points from red balls: $red\n";
echo "Points from orange balls: $orange\n";
echo "Points from yellow balls: $yellow\n";
echo "Points from white balls: $white\n";
echo "Other colors picked: $other\n";
echo "Divides from black balls: $black\n";
