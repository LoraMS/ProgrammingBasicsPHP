<?php

$seconds1 = intval(readline());
$seconds2 = intval(readline());
$seconds3 = intval(readline());

$minutes = floor(($seconds1 + $seconds2 + $seconds3) / 60);
$seconds = ($seconds1 + $seconds2 + $seconds3) - $minutes * 60;

echo $minutes.":";
if($seconds < 10){
    echo "0";
} 
echo $seconds;

//$secondsAll = $seconds1 + $seconds2 + $seconds3;
//
//if ($secondsAll < 60) {
//    if ($secondsAll < 10) {
//        echo "0:0$secondsAll";
//    } else {
//        echo "0:$secondsAll";
//    }
//} elseif ($secondsAll > 59 && $secondsAll < 120) {
//    $secondsAll = $secondsAll - 60;
//    if ($secondsAll < 10) {
//        echo "1:0$secondsAll";
//    } else {
//        echo "1:$secondsAll";
//    }
//} elseif ($secondsAll > 119 && $secondsAll < 180) {
//    $secondsAll = $secondsAll - 120;
//    if ($secondsAll < 10) {
//        echo "2:0$secondsAll";
//    } else {
//        echo "2:$secondsAll";
//    }
//}