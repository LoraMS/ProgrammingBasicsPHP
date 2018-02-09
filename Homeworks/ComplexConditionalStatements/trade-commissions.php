<?php

$town = strtolower(readline());
$sales = doubleval(readline());

$commission = -1.0;

if ($town === "sofia") {
    if ($sales >= 0 && $sales <= 500) {
        $commission = 0.05;
    } elseif ($sales >= 500 && $sales <= 1000) {
        $commission = 0.07;
    } elseif ($sales >= 1000 && $sales <= 10000) {
        $commission = 0.08;
    } elseif ($sales >= 10000) {
        $commission = 0.12;
    }
} elseif ($town === "varna") {
    if ($sales >= 0 && $sales <= 500) {
        $commission = 0.045;
    } elseif ($sales >= 500 && $sales <= 1000) {
        $commission = 0.075;
    } elseif ($sales >= 1000 && $sales <= 10000) {
        $commission = 0.1;
    } elseif ($sales >= 10000) {
        $commission = 0.13;
    }
} elseif ($town === "plovdiv") {
    if ($sales >= 0 && $sales <= 500) {
        $commission = 0.055;
    } elseif ($sales >= 500 && $sales <= 1000) {
        $commission = 0.08;
    } elseif ($sales >= 1000 && $sales <= 10000) {
        $commission = 0.12;
    } elseif ($sales >= 10000) {
        $commission = 0.145;
    }
}

if($commission >= 0){
    $result = $commission * $sales;
    printf("%.2f", $result);
} else {
    echo "error";
}