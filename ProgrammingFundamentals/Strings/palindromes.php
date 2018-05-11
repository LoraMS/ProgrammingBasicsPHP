<?php

$text = readline();
$palindromes = [];
$words = [];
$delimiters = ' ,.!?;';
$word = strtok($text, $delimiters);

while ( $word !== false ) {
     $words[] = $word;
     $word = strtok($delimiters);
 }

for ($i = 0; $i < count($words); $i++) {
    $reversed = strrev($words[$i]);
    if($reversed === $words[$i]){
        $palindromes[] = $words[$i];
    }
}

sort($palindromes);
foreach($palindromes as $palindrome) {
    echo $palindrome . ', ';
}

 
