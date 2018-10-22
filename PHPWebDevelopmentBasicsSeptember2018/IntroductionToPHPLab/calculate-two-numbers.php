<?php

$n = readline();
$m = readline();
$command = strtolower(readline());
$result = 0;

if ($m == 0) {
    echo 'Cannot divide by zero';
} else {
    if ($command == 'sum') {
        echo $n + $m;
    } elseif ($command == 'subtract') {
        echo $n - $m;
    } elseif ($command == 'divide') {
        echo $n / $m;
    } elseif ($command == 'multiply') {
        echo $n * $m;
    } else {
        echo 'Wrong operation supplied';
    }
}

