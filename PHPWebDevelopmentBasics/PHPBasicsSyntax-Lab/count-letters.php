<?php

$word = fgets(STDIN);
$letters = [];

for($i = 0; $i < strlen($word); $i++){
    $letter = $word[$i];
    if(!isset($letters[$letter])){
        $letters[$letter] = 1;
    } else{
        $letters[$letter] ++;
    }
}

print_r($letters);
