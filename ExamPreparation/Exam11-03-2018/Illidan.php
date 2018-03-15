<?php

$peopleCount = intval(readline());
$powerPerPeople = intval(readline());
$ilidanBlood = intval(readline());

$power = $peopleCount * $powerPerPeople;
$difference = abs($power - $ilidanBlood);

if ($power <= $ilidanBlood) {
    echo "You are not prepared! You need $difference more points.";
} else{
    echo "Illidan has been slain! You defeated him with $difference points.";
}

