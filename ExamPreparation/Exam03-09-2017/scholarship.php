<?php

$income = readline();
$results = readline();
$minSalary = readline();

$socialScholarship = floor($minSalary * 0.35);
$excelentScholarship = floor($results * 25);

if ($income > $minSalary) {
    if ($results < 5.50) {
        echo "You cannot get a scholarship!";
    } elseif ($results >= 5.50) {
        echo "You get a scholarship for excellent results $excelentScholarship BGN";
    }
} elseif ($income <= $minSalary) {
    if ($results < 4.5) {
        echo "You cannot get a scholarship!";
    } elseif ($results > 4.5 && $results < 5.5) {
        echo "You get a Social scholarship $socialScholarship BGN";
    } elseif ($results > 5.5) {
        if ($socialScholarship > $excelentScholarship) {
            echo "You get a Social scholarship $socialScholarship BGN";
        } else {
            echo "You get a scholarship for excellent results $excelentScholarship BGN";
        }
    }
}


