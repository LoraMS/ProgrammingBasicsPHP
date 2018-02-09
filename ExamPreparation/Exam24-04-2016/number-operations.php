<?php

$n1 = intval(readline());
$n2 = intval(readline());
$operator = readline();

if ($operator === "+") {
    $result = $n1 + $n2;
    if ($result % 2 === 0) {
        $oddOrEven = "even";
    } else {
        $oddOrEven = "odd";
    }
    echo "$n1 + $n2 = $result - $oddOrEven";
} elseif ($operator === "-") {
    $result = $n1 - $n2;
    if ($result % 2 === 0) {
        $oddOrEven = "even";
    } else {
        $oddOrEven = "odd";
    }
    echo "$n1 - $n2 = $result - $oddOrEven";
} elseif ($operator === "*") {
    $result = $n1 * $n2;
    if ($result % 2 === 0) {
        $oddOrEven = "even";
    } else {
        $oddOrEven = "odd";
    }
    echo "$n1 * $n2 = $result - $oddOrEven";
} elseif ($n2 === 0) {
    echo "Cannot divide $n1 by zero";
} elseif ($operator === "/") {
    $result = $n1 / $n2;
    printf("%d / %d = %.2f", $n1, $n2, $result);
} elseif ($operator === "%") {
    $result = $n1 % $n2;
    echo "$n1 % $n2 = $result";
}


