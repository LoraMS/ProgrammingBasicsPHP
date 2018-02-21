<?php

$num = intval(readline());
$result = 1;

//for ($index = 1; $index <= $num; $index++) {
//    $result *= $index;
//}

do{
    $result *= $num;
    $num--;
} while ($num > 1);

echo $result;