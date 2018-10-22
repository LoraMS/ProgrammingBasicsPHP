<?php

$input = readline();
$arr = explode(' ', $input);
for ($index = 0; $index < count($arr); $index++) {
    $len = strlen($arr[$index]);
    echo str_repeat($arr[$index], $len);
}

