<?php

include "Fibonacci.php";

$startNumber = intval(fgets(STDIN));
$endingNumber = intval(fgets(STDIN));
$fibonacciNumber = new Fibonacci($startNumber, $endingNumber);
echo implode(', ', $fibonacciNumber->getFibonacciSequence());