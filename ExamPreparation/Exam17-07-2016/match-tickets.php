<?php

$budget = floatval(readline());
$category = strtolower(readline());
$groupCount = intval(readline());

$restAmount = 0.00;

if ($groupCount > 0 && $groupCount < 5) {
    $restAmount = $budget - $budget * 0.75;
} elseif ($groupCount > 4 && $groupCount < 10) {
    $restAmount = $budget - $budget * 0.60;
} elseif ($groupCount > 9 && $groupCount < 25) {
    $restAmount = $budget - $budget * 0.50;
} elseif ($groupCount > 24 && $groupCount < 50) {
    $restAmount = $budget - $budget * 0.40;
} elseif ($groupCount > 49) {
    $restAmount = $budget - $budget * 0.25;
}

if ($category === "vip") {
    $ticketsPrice = $groupCount * 499.99;
} elseif ($category === "normal") {
    $ticketsPrice = $groupCount * 249.99;
}

$result = abs($restAmount - $ticketsPrice);

if ($restAmount >= $ticketsPrice) {
    printf("Yes! You have %.2f leva left.", $result);
} else {
    printf("Not enough money! You need %.2f leva.", $result);
}