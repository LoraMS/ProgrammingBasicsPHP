<?php

$input = trim(fgets(STDIN));

isPalindrome($input);

function isPalindrome($word){
    $reversed = strrev($word);
    if($word === $reversed){
        echo "true";
    } else{
        echo "false";
    }
}

