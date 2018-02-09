<?php

$speedBeginning = readline();
$timeBeginning = readline();
$timeMiddle = readline();
$timeEnd = readline();

$speedMiddle = $speedBeginning + $speedBeginning * 0.1;
$speedEnd = $speedMiddle - $speedMiddle * 0.05;

$timeBeginningInHour = $timeBeginning / 60;
$timeMiddleInHour = $timeMiddle / 60;
$timeEndInHour = $timeEnd / 60;

$distance = $speedBeginning * $timeBeginningInHour + $speedMiddle * $timeMiddleInHour + $speedEnd * $timeEndInHour;

printf("%.2f", $distance);