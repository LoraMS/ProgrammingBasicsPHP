<?php

$stepsCount = readline();
$dancersCount = readline();
$daysCount = readline();

$stepsPerDay = ceil((($stepsCount / $daysCount) / $stepsCount) * 100);
$stepsDancer = $stepsPerDay / $dancersCount;

if($stepsPerDay <= 13){
    printf("Yes, they will succeed in that goal! %.2f%%.", $stepsDancer);
} else{
    printf("No, They will not succeed in that goal! Required %.2f%% steps to be learned per day.", $stepsDancer);
}