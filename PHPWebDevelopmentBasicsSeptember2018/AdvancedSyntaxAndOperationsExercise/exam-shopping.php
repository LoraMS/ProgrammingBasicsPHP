<?php

$products = [];
while (true){
    $input = explode(' ', readline());
    if($input[0] === 'shopping'){
        break;
    }
    if(!array_key_exists($input[1],$products)){
        $products[$input[1]] = 0;
    }
    $products[$input[1]] += intval($input[2]);
}

while (true){
    $input = explode(' ', readline());
    if($input[0] ==='exam'){
        break;
    }
    if(!array_key_exists($input[1],$products)){
        echo "$input[1] doesn't exist".PHP_EOL;
    } else {
        if($products[$input[1]]>0) {
            $products[$input[1]] -= intval($input[2]);
        } else {
            echo $input[1]." out of stock".PHP_EOL;
        }
    }
}

foreach ($products as $product => $quantity) {
    if($quantity>0){
        echo $product." -> ".$quantity.PHP_EOL;
    }
}