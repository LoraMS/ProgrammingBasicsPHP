<?php
$input = explode(", ", trim(fgets(STDIN)));
for ($i = 0; $i < count($input); $i +=2) {
    $x = $input[$i];
    $y = $input[$i+1];
    getLocation($x, $y);
}

function getLocation($x, $y){
    $tuvalu = $x >= 1 && $x <= 3 && $y >= 1 && $y <= 3;
    $tokelau = $x >= 8 && $x <= 9 && $y >= 0 && $y <= 1;
    $tonga = $x >= 0 && $x <= 2 && $y >= 6 && $y <= 8;
    $samoa = $x >= 5 && $x <= 7 && $y >= 3 && $y <= 6;
    $cook = $x >= 4 && $x <= 9 && $y >= 7 && $y <= 8;
    if ($tuvalu) {
        echo "Tuvalu"."\n";
    }
    elseif ($tokelau) {
        echo "Tokelau"."\n";
    }
    elseif ($tonga) {
        echo "Tonga"."\n";
    }
    elseif ($samoa) {
        echo "Samoa"."\n";
    }
    elseif ($cook) {
        echo "Cook"."\n";
    }
    else {
        echo "On the bottom of the ocean"."\n";
    }
}