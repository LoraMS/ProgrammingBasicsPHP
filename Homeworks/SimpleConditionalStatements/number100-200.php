<?php

$num = readline();

if ($num < 100) {
    echo "Less than 100";
} elseif ($num > 99 && $num <= 200) {
    echo "Between 100 and 200";
} elseif ($num > 200) {
    echo "Greater than 200";
} 
