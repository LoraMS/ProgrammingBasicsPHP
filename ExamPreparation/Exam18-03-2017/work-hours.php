<?php

$hoursNeeded = readline();
$workersCount = readline();
$workDays = readline();

$workTime = $workersCount * $workDays * 8;

$difference = abs($hoursNeeded - $workTime);

if ($workTime >= $hoursNeeded) {
    echo "$difference hours left";
} else {
    echo "$difference overtime\n";
    echo "Penalties: ".$difference * $workDays;
}
