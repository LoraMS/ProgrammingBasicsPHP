<?php

$hours = readline();
$minutes = readline();

$minutes += 15;

if ($minutes > 59) {
    $hours += 1;
    $minutes -= 60;
    if ($hours > 23) {
        $hours = 0;
    }
}

if ($minutes < 10) {
    echo "$hours:0$minutes";
} else {
    echo "$hours:$minutes";
}

