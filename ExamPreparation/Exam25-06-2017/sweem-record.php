<?php

$record = readline();
$distanceInMeter = readline();
$timePerMeterInSeconds = readline();

$timeNeeded = $distanceInMeter * $timePerMeterInSeconds;
$timeExtra = floor($distanceInMeter / 15) * 12.5;
$timeAll = $timeExtra + $timeNeeded;

if ($record > $timeAll) {
    printf("Yes, he succeeded! The new world record is %.2f seconds.", $timeAll);
} else {
    $difference = abs($record - $timeAll);
    printf("No, he failed! He was %.2f seconds slower.", $difference);
}