<?php

$counter = 0;
while (true) {
    $ingredient = readline();
    if ($ingredient === "Bake!") {
        echo "Preparing cake with $counter ingredients.";
        break;
    }
    $counter ++;
    echo "Adding ingredient $ingredient.\n";
}
