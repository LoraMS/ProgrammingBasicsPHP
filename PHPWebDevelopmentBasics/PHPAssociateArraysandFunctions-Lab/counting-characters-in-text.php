<?php

$text = trim(fgets(STDIN));
$text = strtolower($text);
$letters = [];
for($i = 0; $i < strlen($text); $i++){
    $letter = $text[$i];
    if(isset($letters[$letter])){
        $letters[$letter] ++;
    } else {
        $letters[$letter] = 1;
    }
}

//var_dump($letters);

echo "<pre>";
print_r($letters);
echo "</pre>";