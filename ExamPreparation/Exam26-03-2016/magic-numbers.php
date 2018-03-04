<?php

$n = intval(readline());

for ($i=1;$i<=9;$i++) {
    for ($i1=1;$i1<=9;$i1++) {
        for ($i2=1;$i2<=9;$i2++) {
            for ($i3=1;$i3<=9;$i3++) {
                for ($i4=1;$i4<=9;$i4++) {
                    for ($i5=1;$i5<=9;$i5++) {
                        if ($i*$i1*$i2*$i3*$i4*$i5 == $n) {
                            echo "$i$i1$i2$i3$i4$i5 ";
                        }
                    }
                }
            }
        }
    }
}

for ($num = 111111; $num <= 999999; $num++) {
    $num1 = $num % 10;
    $num2 = floor($num / 10) % 10;
    $num3 = floor($num / 100) % 10;
    $num4 = floor($num / 1000) % 10;
    $num5 = floor($num / 10000) % 10;
    $num6 = floor($num / 100000) % 10;
    $product = $num1 * $num2 * $num3 * $num4 * $num5 * $num6;
    if ($product === $n) {
        echo "$num" . " ";
    }
}