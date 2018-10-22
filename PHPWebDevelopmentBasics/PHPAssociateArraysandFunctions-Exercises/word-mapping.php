<?php

$text = strtolower(fgets(STDIN));
$result = [];

preg_match_all('/[a-z]+/', $text, $words);

foreach($words[0] as $word){
    if(!array_key_exists($word, $result)){
        $result[$word] = 1;
    } else {
        $result[$word] ++;
    }
}

foreach ($result as $key => $value){
    echo $key .' -> '. $value . "\n";
}