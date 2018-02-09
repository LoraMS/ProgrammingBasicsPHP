<?php

$input = readline();

if ($input === "banana" || $input === "apple" || $input === "kiwi" || $input === "cherry" || $input === "lemon" || $input === "grapes") {
    echo "fruit";
} elseif ($input === "tomato" || $input === "cucumber" || $input === "pepper" || $input === "carrot" ) {
    echo "vegetable";
} else {
    echo "unknown";
}

