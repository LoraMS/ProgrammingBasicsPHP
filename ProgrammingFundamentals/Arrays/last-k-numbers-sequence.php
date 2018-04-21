<?php

$n = intval(readline());
$s = intval(readline());
$sequence[0] = 1;

for ($i = 1; $i < $n; $i++) {
    $sum = 0;
    for ($j = $i - $s; $j <= $i - 1; $j++) {
        if ($j >= 0) {
            $sum += $sequence[$j];
        }
         $sequence[$i] = $sum;
    }
     
}
//echo '<pre>'; print_r($sequence); echo '</pre>';

foreach($sequence as $result) {
    echo $result. " ";
}