<?php

$input = readline();
$array = explode(" ", $input);
$num = intval(readline());
$counter = 0;
$ingredients = [];

for ($i = 0; $i < count($array); $i++) {
    if(strlen($array[$i]) === $num){
        echo "Adding $array[$i].\n";
        array_push($ingredients, $array[$i]);
        $counter ++;
        if($counter >= 10){
            exit(0);
        }
    }
}

echo "Made pizza with total of $counter ingredients.\n";
echo "The ingredients are: ";
echo implode(", ", $ingredients).".";