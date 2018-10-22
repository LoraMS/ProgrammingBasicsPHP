<?php

$emailes = [];
$counter = 0;

while (true) {
    $input = explode(' -> ', readline());
    if ($input[0] === 'login') {
        break;
    } 
    $name = $input[0];
    $pass = $input[1];
    $emailes[$name] = $pass;
}

while (true) {
    $input = explode(' -> ', readline());
    if ($input[0] === 'end') {
        break;
    } 
    $name = $input[0];
    $pass = $input[1];
    if(array_key_exists($name, $emailes) && $emailes[$name] === $pass){
        echo $name.": logged in successfully".PHP_EOL;
    } else {
        $counter ++;
        echo $name.": login failed".PHP_EOL;
    }
}

echo "unsuccessful login attempts: $counter";