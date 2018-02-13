<?php

$hours = readline();
$minutes = readline();
$time = readline();

$minutesAll = $minutes + $hours * 60 + $time;

$hoursArrival = floor($minutesAll / 60);
$minutesArrival = $minutesAll - floor($minutesAll / 60) * 60;

if ($hoursArrival > 23) {
    $hoursArrival -= 24;
}

echo $hoursArrival . "h " . $minutesArrival . "m";


/*

$hours = readline();
$minutes = readline();
$time = readline();

$minutesAll = $minutes + $hours * 60 + $time;

        if ($minutesAll / 60 >= 24)
        {
            $hoursArrival = floor($minutesAll / 60) - 24;
            $minutesArrival = $minutesAll - floor($minutesAll / 60) * 60;
        }
        else
        {
            $hoursArrival = floor($minutesAll / 60);
            $minutesArrival = $minutesAll - floor($minutesAll / 60) * 60;
        }
echo $hoursArrival . "h " . $minutesArrival . "m";
 */