<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$n = readline();

echo str_repeat("*", $n);
echo "\n";

for ($i = 1; $i <= $n - 2; $i++) {
    echo "*";
    echo str_repeat(" ", $n - 2);
    echo "*\n";
}

echo str_repeat("*", $n);

