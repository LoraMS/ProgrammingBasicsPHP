<?php

$firstBrotherTime = readline();
$secondBrotherTime = readline();
$thirdBrotherTime = readline();
$fatherFishingTime = readline();

$timeAll = 1 / (1 / $firstBrotherTime + 1 / $secondBrotherTime + 1 / $thirdBrotherTime);

$cleaningTime = $timeAll + $timeAll * 0.15;

$difference = abs($fatherFishingTime - $cleaningTime);

if ($fatherFishingTime >= $cleaningTime) {
    printf("Cleaning time: %.2f", $cleaningTime);
    echo "\n";
    echo "Yes, there is a surprise - time left -> " . floor($difference) . " hours.";
} else {
    printf("Cleaning time: %.2f", $cleaningTime);
    echo "\n";
    echo "No, there isn't a surprise - shortage of time -> " . ceil($difference) . " hours.";
}