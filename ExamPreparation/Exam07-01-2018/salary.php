<?php

$salary = floatval(readline());
$time = intval(readline());
$text = strtolower(readline());

// solution in comment 80/100
//$years = 0;
//$salaryNext = 0.00;
//
//for ($i = 1; $i <= $time; $i++) {
//    $salary += $salary * 0.06;
//    $memberTax = 0.01;
//    if (($i % 5 === 0) && ($i % 10 !== 0)) {
//        $salary += 100;
//        $memberTax = 0;
//    }
//    if ($i % 10 === 0) {
//        $salary += 200;
//        $memberTax = 0;
//    }
//
//    if ($text === "yes") {
//        $salary -= $salary * $memberTax;
//    }
//
//    if ($salary >= 5000) {
//        $salary = 5000;
//        $years = 0;
//    }
//}
//
//if ($salary < 5000) {
//    $salaryNext = $salary;
//    for ($index = 1; $index <= 1000; $index++) {
//        $salaryNext += $salaryNext * 0.06;
//        $memberTax = 0.01;
//        if (($index % 5 === 0) && ($index % 10 !== 0)) {
//            $salaryNext += 100;
//            $memberTax = 0;
//        }
//        if ($index % 10 === 0) {
//            $salaryNext += 200;
//            $memberTax = 0;
//        }
//
//        if ($text === "yes") {
//            $salaryNext -= $salaryNext * $memberTax;
//        }
//
//        if ($salaryNext >= 5000) {
//            $years = $index - 1;
//            break;
//        }
//    }
//}
//
//$salaryFormatted = number_format($salary, 2, ".", "");
//
//echo "Current salary: $salaryFormatted\n";
//echo "$years more years to max salary.";


for ($index = 1; $index <= 1000; $index++) {
    $salary += $salary * 0.06;
    $memberTax = 0.01;
    if (($index % 5 === 0) && ($index % 10 !== 0)) {
        $salary += 100;
        $memberTax = 0;
    }
    if ($index % 10 === 0) {
        $salary += 200;
        $memberTax = 0;
    }

    if ($text === "yes") {
        $salary -= $salary * $memberTax;
    }

    if ($index === $time && $salary < 5000) {
        $salaryFormatted = number_format($salary, 2, ".", "");
        echo "Current salary: $salaryFormatted\n";
    } else if ($salary >= 5000 && $time >= $index) {
        echo "Current salary: 5000.00\n";
        echo "0 more years to max salary.";
        break;
    }
    if ($salary >= 5000) {
        $years = $index - 1 - $time;
        echo "$years more years to max salary.";
        break;
    }
}
