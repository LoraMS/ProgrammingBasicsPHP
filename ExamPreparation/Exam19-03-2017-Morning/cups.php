<?php

$planedCups = readline();
$workersCount = readline();
$workDays = readline();

$workHours = $workersCount * $workDays * 8;
$producedCups = floor($workHours / 5);
$difference = abs($producedCups - $planedCups);
$result = $difference * 4.2;

if ($producedCups >= $planedCups) {
    echo number_format($result, 2, ".", "") . " extra money";
} else {
    echo "Losses: " . number_format($result, 2, ".", "");
}

