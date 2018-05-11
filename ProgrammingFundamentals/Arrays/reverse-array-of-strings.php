<?php

$input = readline();
$arr = explode(" ", $input);
$reversed = array_reverse($arr);

for ($i = 0; $i < count($reversed); $i++) {
    echo $reversed[$i] . " ";
}

