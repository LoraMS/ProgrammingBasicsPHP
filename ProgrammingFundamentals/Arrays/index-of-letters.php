<?php

$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$word = readline();
$arr = str_split($word);
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($alphabet); $j++) {
        if ($arr[$i] === $alphabet[$j]) {
            echo $arr[$i] . " -> " . $j . "\n";
        }
    }
}


for ($index = 0; $index < count($arr); $index++) {
    $position = ord($arr[$index]) - 97;
    echo $arr[$index] . " -> " . $position . "\n";
}