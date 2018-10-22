<?php
$num1 = 7.1234;
$num2 = 7.4321;
$sumTwo = function($n1, $n2){
    return $n1 + $n2;
};

echo 'The sum is: '.$sumTwo($num1, $num2);