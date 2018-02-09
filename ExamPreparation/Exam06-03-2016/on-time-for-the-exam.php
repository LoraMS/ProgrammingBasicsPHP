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