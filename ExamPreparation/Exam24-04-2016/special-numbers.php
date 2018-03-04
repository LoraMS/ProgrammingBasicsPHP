<?php

$n = intval(readline());

for ($index1 = 1; $index1 <= 9; $index1++) {
    for ($index2 = 1; $index2 <= 9; $index2++) {
        for ($index3 = 1; $index3 <= 9; $index3++) {
            for ($index4 = 1; $index4 <= 9; $index4++) {
                if ($n%$index1 === 0 && $n%$index2 === 0 && $n%$index3 === 0 && $n%$index4 === 0) {
                    echo "$index1" . "$index2" . "$index3" . "$index4". " ";
                }
            }
        }
    }
}
