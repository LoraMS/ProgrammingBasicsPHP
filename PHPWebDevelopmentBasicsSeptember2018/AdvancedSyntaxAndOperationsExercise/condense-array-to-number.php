<?php

$input = array_map('intval', explode(' ', readline()));

while (count($input) > 1) {
    $condensed = [];
    for ($i = 0; $i < count($input)-1; $i++) {
        $condensed[$i] = $input[$i]+$input[$i+1];
    }
    $input = $condensed;
}

echo $input[0];