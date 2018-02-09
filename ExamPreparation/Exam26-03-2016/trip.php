<?php

$budget = floatval(readline());
$season = strtolower(readline());

if ($budget <= 100) {
    echo "Somewhere in Bulgaria\n";
    if ($season === "summer") {
        printf("Camp - %.2f", $budget * 0.3);
    } elseif ($season === "winter") {
        printf("Hotel - %.2f", $budget * 0.7);
    }
} elseif ($budget <= 1000) {
    echo "Somewhere in Balkans\n";
    if ($season === "summer") {
        printf("Camp - %.2f", $budget * 0.4);
    } elseif ($season === "winter") {
        printf("Hotel - %.2f", $budget * 0.8);
    }
} else {
    echo "Somewhere in Europe\n";
    printf("Hotel - %.2f", $budget * 0.9);
}

