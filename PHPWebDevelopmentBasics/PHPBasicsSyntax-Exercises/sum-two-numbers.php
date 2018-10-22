<?php

$firstNum = floatval(fgets(STDIN));
$secondNum = floatval(fgets(STDIN));
$result = $firstNum + $secondNum;

echo '$firstNumber + $secondNumber = '."$firstNum + $secondNum = ".number_format($result, 2, ".", "");