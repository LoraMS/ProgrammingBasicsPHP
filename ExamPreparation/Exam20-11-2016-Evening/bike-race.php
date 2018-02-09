<?php

$juniors = intval(readline());
$seniors = intval(readline());
$road = strtolower(readline());

$ticketsJunior = 0.00;
$ticketsSenior = 0.00;

if ($road === 'trail') {
    $ticketsJunior = 5.50;
    $ticketsSenior = 7.00;
} elseif ($road === 'cross-country') {
    $ticketsJunior = 8.00;
    $ticketsSenior = 9.50;
    if ($seniors + $juniors >= 50) {
        $ticketsJunior = $ticketsJunior - $ticketsJunior * 0.25;
        $ticketsSenior = $ticketsSenior - $ticketsSenior * 0.25;
    }
} elseif ($road === 'downhill') {
    $ticketsJunior = 12.25;
    $ticketsSenior = 13.75;
} elseif ($road === 'road') {
    $ticketsJunior = 20.00;
    $ticketsSenior = 21.50;
}

$juniorsIncome = $juniors * $ticketsJunior;
$seniorsIncome = $seniors * $ticketsSenior;
$income = $juniorsIncome + $seniorsIncome;
$taxes = $income * 0.05;
$restIncome = $income - $taxes;

echo number_format($restIncome, 2, ".", "");