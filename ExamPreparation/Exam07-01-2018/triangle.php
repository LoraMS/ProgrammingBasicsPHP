<?php

$a = floatval(readline());
$b = floatval(readline());
$c = floatval(readline());

if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
    if($a === $b && $b === $c){
        echo "Triangle with sides $a, $b and $c is equilateral.";
    } elseif ($a !== $b && $b !== $c && $a !== $c) {
        echo "Triangle with sides $a, $b and $c is scalene.";
    } else{
        echo "Triangle with sides $a, $b and $c is isosceles.";
    }
} else {
    echo "There is no triangle with sides $a, $b and $c.";
}