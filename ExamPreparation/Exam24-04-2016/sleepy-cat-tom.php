<?php

$restDays = readline();
$workDays = 365 - $restDays;

$playTime = $restDays * 127 + $workDays * 63;
$time = abs(30000 - $playTime);
$hours = floor($time / 60);
$minutes = $time % 60;

if ($playTime < 30000) {
    echo "Tom sleeps well\n";
    echo "$hours hours and $minutes minutes less for play";
} else {
    echo "Tom will run away\n";
    echo "$hours hours and $minutes minutes more for play";
}

