<?php

$string = fgets(STDIN);
//$string = 'aaabbaaabbbccc';
$result = [];
for($i = 0; $i < strlen($string); $i++){
    $char = $string[$i];
    if(!isset($result[$char])){
        $result[$char] = 1;
    } else {
        $result[$char] ++;
    }
}

foreach ($result as $key => $value){
    echo $key .' -> '. $value . "\n";
}