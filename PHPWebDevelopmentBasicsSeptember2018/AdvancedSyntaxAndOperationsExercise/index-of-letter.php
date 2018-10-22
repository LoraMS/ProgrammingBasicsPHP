<?php

$str = strtolower(readline());
//$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

for ($index = 0; $index < strlen($str); $index++) {
//    echo "$str[$index] -> ".array_search($str[$index], $letters).PHP_EOL;
    echo "$str[$index] -> ".(ord($str[$index])-97).PHP_EOL;
}

