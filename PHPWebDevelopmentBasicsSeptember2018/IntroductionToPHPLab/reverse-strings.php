<?php

while (true) {
    $word = readline();
    
    if($word === 'end'){
        break;
    }
    
    echo "$word = ";
    $reversed = strrev($word);
    echo $reversed.PHP_EOL;
}

