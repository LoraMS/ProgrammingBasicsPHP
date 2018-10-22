<?php

$phoneBook = [];

while (true){
    $input = explode(' : ', readline());
    
    if($input[0] === 'Over'){
        break;
    }
    $firstElement = $input[0];
    $secondElement = $input[1];
    if (preg_match('/^[0-9]+$/', $firstElement)) {
        $phoneBook[$secondElement] = $firstElement;
    } else {
        $phoneBook[$firstElement] = $secondElement;
    }
}

ksort($phoneBook);
foreach ($phoneBook as $name => $phone) {
    echo "$name -> $phone".PHP_EOL;
}