<?php

$n = intval(readline());
$calories = 0;

for ($index = 0; $index < $n; $index++) {
    $ingredient = strtolower(readline());
    if($ingredient === "cheese"){
        $calories += 500;
    } elseif($ingredient === "tomato sauce"){
        $calories += 150;
    } elseif($ingredient === "salami"){
        $calories += 600;
    } elseif($ingredient === "pepper"){
        $calories += 50;
    }
}

echo "Total calories: $calories";