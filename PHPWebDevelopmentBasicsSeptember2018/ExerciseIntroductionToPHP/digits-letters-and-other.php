<?php

$input = readline();
$digits = '';
$letters = '';
$other = '';

for ($index = 0; $index < strlen($input); $index++) {
    if(is_numeric($input[$index])){
        $digits .= $input[$index];
    } elseif(ctype_alpha($input[$index])){
        $letters .= $input[$index];
    } else {
        $other .= $input[$index];
    }
}

echo $digits."\n";
echo $letters."\n";
echo $other."\n";