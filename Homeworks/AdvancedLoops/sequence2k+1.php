<?php

$num = intval(readline());
$n = 1;

//for ($index = 0; $index <= $num; $index+=1) {
//    echo $n."\n";
//    $n = $n*2 + 1;
//    if($n > $num){
//        break;
//    }
//}

while ($n <= $num) {
    echo $n."\n";
    $n = $n*2 + 1;
}