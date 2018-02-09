<?php

$text = readline();
$sum = 0;

for ($index = 0; $index < strlen($text); $index++) {
    switch ($text[$index]) {
        case "a": $sum += 1;
            break;
        case "e": $sum += 2;
            break;
        case "i": $sum += 3;
            break;
        case "o": $sum += 4;
            break;
        case "u": $sum += 5;
            break;
    }
}

echo $sum;