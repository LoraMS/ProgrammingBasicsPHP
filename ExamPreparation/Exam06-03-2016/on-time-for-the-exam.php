<?php

$examHour = intval(readline());
$examMinutes = intval(readline());
$arrivalHour = intval(readline());
$arrivalMinutes = intval(readline());

$examTime = $examHour * 60 + $examMinutes;
$arrivalTime = $arrivalHour * 60 + $arrivalMinutes;

$difference = abs($examTime - $arrivalTime);

if ($examTime > $arrivalTime) {
    if ($difference <= 30) {
        echo "On time\n";
        echo "$difference minutes before the start";
    } else {
        echo "Early\n";
        if ($difference < 60) {
            echo "$difference minutes before the start";
        } else {
            $hoursEarly = floor($difference / 60);
            $difference = $difference - 60;
            $minutesEarly = $difference % 60;
            if ($minutesEarly < 10) {
                echo "$hoursEarly:0$minutesEarly hours before the start";
            } else {
                echo "$hoursEarly:$minutesEarly hours before the start";
            }
        }
    }
} elseif ($examTime < $arrivalTime) {
    echo "Late\n";
    if ($difference < 60) {
        echo "$difference minutes after the start";
    } else {
        $hoursLate = floor($difference / 60);
        $difference = $difference - 60;
        $minutesLate = $difference % 60;
        if ($difference < 10) {
            echo $hoursLate . ":0" . $minutesLate . " hours after the start";
        } else {
            echo $hoursLate . ":" . $minutesLate . " hours after the start";
        }
    }
} else {
    echo "On time";
}

/*
$hoursStart = intval(readline());
$minutesStart = intval(readline());
$hoursArrive = intval(readline());
$minutesArrive = intval(readline());

$start = $hoursStart * 60 + $minutesStart;
$arrive = $hoursArrive * 60 + $minutesArrive;

if($start === $arrive){
    echo "On time\n";
} elseif ($start - $arrive > 0 && $start - $arrive <= 30) {
    echo "On time\n";
    echo ($start - $arrive)." minutes before the start";
} elseif ($start - $arrive > 30) {
    echo "Early\n";
    if ($start - $arrive < 60) {
        echo ($start - $arrive)." minutes before the start";
    } else {
        $early = $start - $arrive;
        $hh = floor($early/60);
        $mm = $early % 60;
        echo $hh.":";
        if($mm < 10){
            echo "0";
        }
        echo "$mm hours before the start";
    }
} elseif ($arrive > $start) {
    echo "Late\n";
    if ($arrive - $start <= 59) {
        echo $arrive - $start." minutes after the start";
    } else{
        $late = $arrive - $start;
        $hh = floor($late/60);
        $mm = $late % 60;
        echo $hh.":";
        if($mm < 10){
            echo "0";
        }
        echo "$mm hours after the start";
    }
}
*/