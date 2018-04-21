<?php

$n = intval(readline());
$text = "";

for ($index = 0; $index < $n; $index++) {
    $input = readline();
    $text .= $input;
}

echo "The word is: $text";

