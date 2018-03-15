<?php

$gender = strtolower(readline());
$age = intval(readline());
$lengthOfService = intval(readline());

if ($gender === "male") {
    if ($age >= 64 && $lengthOfService >= 38) {
        echo "Ready to retire at $age and $lengthOfService years of experience!";
    } elseif ($age < 64 && $lengthOfService >= 38) {
        echo "Worked enough, but not old enough. Years left to retirement: ".(64 - $age).".";
    } elseif ($age >= 64 && $lengthOfService < 38) {
        echo "Old enough, but haven't worked enough. Work experience left to retirement: ".(38-$lengthOfService).".";
    } elseif ($age < 64 && $lengthOfService < 38) {
        echo "Too early. Years left to retirement: ".(64-$age).". Work experience left to retirement: ".(38-$lengthOfService).".";
    }
} elseif ($gender === "female") {
    if ($age >= 61 && $lengthOfService >= 35) {
        echo "Ready to retire at $age and $lengthOfService years of experience!";
    } elseif ($age < 61 && $lengthOfService >= 35) {
        echo "Worked enough, but not old enough. Years left to retirement: ".(61 - $age).".";
    } elseif ($age >= 61 && $lengthOfService < 35) {
        echo "Old enough, but haven't worked enough. Work experience left to retirement: ".(35-$lengthOfService).".";
    } elseif ($age < 61 && $lengthOfService < 35) {
        echo "Too early. Years left to retirement: ".(61-$age).". Work experience left to retirement: ".(35-$lengthOfService).".";
    }
} else{
    echo "Invalid input.";
}