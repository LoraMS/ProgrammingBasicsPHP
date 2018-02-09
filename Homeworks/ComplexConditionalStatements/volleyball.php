<?php

$year = strtolower(readline());
$holidays = intval(readline());
$travelWeekends = intval(readline());

$weekendsInSofia = 48 - $travelWeekends;
$playsInSofia = $weekendsInSofia * 3.0/4;
$playsInHomeTown = $travelWeekends;
$playsInHolidays = $holidays * 2.0/3;
$plays = $playsInHolidays + $playsInHomeTown + $playsInSofia;

if ($year === "leap") {
    $extraPlays = $plays * 0.15;
    $result = $plays + $extraPlays;
    echo floor($result);
} else {
    echo floor($plays);
}