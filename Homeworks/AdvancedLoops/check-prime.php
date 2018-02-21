<?php

$num = intval(readline());
$prime = true;

if ($num < 2) {
    echo "Not Prime";
    return;
}

for ($index = 2; $index <= sqrt($num); $index++) {
    if ($num % $index === 0) {
        $prime = false;
        break;
    }
}

if ($prime) {
    echo "Prime";
} else {
    echo "Not Prime";
}