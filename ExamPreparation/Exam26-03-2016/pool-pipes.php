<?php

$poolVolume = readline();
$firstPipe = readline();
$secondPipe = readline();
$hoursOut = readline();

$firstPipeVolume = $firstPipe * $hoursOut;
$secondPipeVolume = $secondPipe * $hoursOut;
$allPipeVolume = $firstPipeVolume + $secondPipeVolume;

if ($poolVolume >= $allPipeVolume) {
    $allVolumeInPercent = floor(($allPipeVolume / $poolVolume) * 100);
    $firstPipeDifference = floor(($firstPipeVolume / $allPipeVolume) * 100);
    $secondPipeDifference = floor(($secondPipeVolume / $allPipeVolume) * 100);
    echo "The pool is $allVolumeInPercent% full. Pipe 1: $firstPipeDifference%. Pipe 2: $secondPipeDifference%.";
} else {
    $overflowLiters = abs($allPipeVolume - $poolVolume);
//    printf("For %.1f hours the pool overflows with %.1f liters.", $hoursOut, $overflowLiters);
    echo "For $hoursOut hours the pool overflows with ".number_format($overflowLiters, 1, '.', '')." liters.";
}