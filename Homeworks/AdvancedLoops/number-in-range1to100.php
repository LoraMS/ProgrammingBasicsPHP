<?php

echo "Еnter a number in the range [1...100]: ";
$n = intval(readline());

while ($n < 1 || $n > 100) {
    echo "Invalid number!\n";
    echo "Еnter a number in the range [1...100]: ";
    $n = readline();
}

echo "The number is: $n";