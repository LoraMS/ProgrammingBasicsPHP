<?php

$adults = intval(readline());
$students = intval(readline());
$sleepingCount = intval(readline());
$transport = strtolower(readline());

$ticketsAdult = 0.00;
$ticketsStudent = 0.00;

if ($transport === 'train') {
    $ticketsAdult = 24.99;
    $ticketsStudent = 14.99;
    if ($adults + $students >= 50) {
        $ticketsAdult /= 2;
        $ticketsStudent /= 2;
    }
} elseif ($transport === 'bus') {
    $ticketsAdult = 32.50;
    $ticketsStudent = 28.50;
} elseif ($transport === 'boat') {
    $ticketsAdult = 42.99;
    $ticketsStudent = 39.99;
} elseif ($transport === 'airplane') {
    $ticketsAdult = 70.00;
    $ticketsStudent = 50.00;
}

$transportCosts = ($ticketsAdult * $adults + $ticketsStudent * $students) * 2;
$sleepingCosts = $sleepingCount * 82.99;

$costs = $transportCosts + $sleepingCosts;
$commission = $costs * 0.10;
$allCosts = $costs + $commission;

echo number_format($allCosts, 2, ".", "");