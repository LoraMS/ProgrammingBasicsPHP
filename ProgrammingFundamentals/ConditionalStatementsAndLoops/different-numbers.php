<?php

$n = intval(readline());
$m = intval(readline());
$print = false;

for ($i = $n; $i <= $m; $i++) {
    for ($i1 = $i; $i1 <= $m; $i1++) {
        for ($i2 = $i1; $i2 <= $m; $i2++) {
            for ($i3 = $i2; $i3 <= $m; $i3++) {
                for ($i4 = $i3; $i4 <= $m; $i4++) {
                    if($i < $i1 && $i1 < $i2 && $i2 < $i3 && $i3 < $i4){
                        echo "$i $i1 $i2 $i3 $i4\n";
                        $print = true;
                    }
                }
            }
        }
    }
}
if(!$print){
    echo "No";
}