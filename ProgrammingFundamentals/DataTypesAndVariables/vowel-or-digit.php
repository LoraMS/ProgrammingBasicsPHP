<?php

$input = readline();
$vowels = ["a", "e", "i", "o", "u"];

if(is_numeric($input)){
    echo "digit";
}elseif(in_array($input, $vowels)){
    echo "vowel";
} else {
    echo "other";
}

