<?php

$key = intval(readline());
$n = intval(readline());
$result = '';
for ($index = 0; $index < $n; $index++) {
    $character = readline();
    $decriptedCharacter = ord($character) + $key;
    $result .= chr($decriptedCharacter);
}
echo $result;