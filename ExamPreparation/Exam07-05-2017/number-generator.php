<?php

$m = intval(readline());
$n = intval(readline());
$l = intval(readline());
$specialNumber = intval(readline());
$controlNumber = intval(readline());
$exit = false;

for ($i = $m; $i >= 1; $i--) {
    for ($j = $n; $j >= 1; $j--) {
        for ($p = $l; $p >= 1; $p--) {
            $new = intval("$i$j$p");
            //var_dump($new); //int(223)
            // $number = 100 * i + 10 * j + p;
           if ($new%3 === 0) {
               $specialNumber += 5;
           } elseif ($new%10 === 5) {
               $specialNumber -= 2;
           } elseif ($new%2 === 0) {
               $specialNumber *= 2;
           }
           
           if($specialNumber >= $controlNumber){
               $exit = true;
               break;
           }
        }
        if($exit){
            break;
        }
    }
    if ($exit) {
        break;
    }
}

if ($exit) {
    echo "Yes! Control number was reached! Current special number is $specialNumber.";
} else {
    echo "No! $specialNumber is the last reached special number.";
}