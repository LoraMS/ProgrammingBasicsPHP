<?php

$hours = readline();
$days = readline();
$employees = readline();

$daysAtWork = $days - $days * 0.1;
$hoursAtWork = floor($daysAtWork * 8);
$hoursExtra = floor($employees * 2 * $days);

$time = abs($hours - ($hoursAtWork + $hoursExtra));

if($hours <= ($hoursAtWork + $hoursExtra)) {
    echo "Yes!$time hours left.";
} else {
    echo "Not enough time!$time hours needed.";
}