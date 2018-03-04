<?php

$n = intval(readline());

$counter = 0;
$password = "";
$hasPassword = false;

for ($a = 1; $a <= 9; $a++) {
    for ($b = 1; $b <= 9; $b++) {
        for ($c = 1; $c <= 9; $c++) {
            for ($d = 1; $d <= 9; $d++) {
                if($a < $b && $c > $d && $a*$b + $c*$d === $n){
                    $counter++;
                    if($counter === 4){
                        $password = "$a$b$c$d";
                        $hasPassword = true;
                    }
                    echo "$a$b$c$d ";
                }
            }
        }
    }
}

if ($hasPassword == 0) {
    $password = "No!";
} else {
    $password = "Password: ".$password;
}
echo "\n";
echo $password;