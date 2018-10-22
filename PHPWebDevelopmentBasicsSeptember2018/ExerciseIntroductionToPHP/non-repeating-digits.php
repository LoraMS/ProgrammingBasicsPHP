<?php

$n = intval(readline());
$result = [];

for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= 9; $j++) {
        for ($m = 0; $m <= 9; $m++) {
            $number = intval("$i$j$m");
            if ($i !== $j && $j !== $m && $i !== $m) {
                if ($number <= $n && $number > 100) {
                    $result[] = $number;
                }
            }
        }
    }
}

if (count($result) === 0) {
    echo 'no';
} else {
    echo implode(', ', $result);
}