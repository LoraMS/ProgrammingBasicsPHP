<?php

$n = intval(readline());
$m = intval(readline());
$s = intval(readline());

for ($index = $m; $index >= $n; $index--) {
    if($index%2 == 0 && $index%3 == 0){
        if($index == $s){
            break;
        }
        echo "$index "; 
    }
}

