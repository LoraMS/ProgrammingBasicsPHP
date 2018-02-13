<?php

$guests = intval(readline());
$budget = intval(readline());

$covert = $guests * 20;
$difference = abs($budget - $covert);

if($budget > $covert){
    $fireworks = $difference * 0.40;
    $moneyLeft = $difference - $fireworks;
    echo "Yes! ".round($fireworks)." lv are for fireworks and ".round($moneyLeft)." lv are for donation.";
} else {
    echo "They won't have enough money to pay the covert. They will need ".round($difference)." lv more.";
}
