<?php

$n = intval(readline());
$width = $n + 5;
$dots = 0;

echo str_repeat("_", ($n+4)/2)."^".str_repeat("_", ($n + 4)/2)."\n";
echo str_repeat("_", ($n+2)/2)."/|\\".str_repeat("_", ($n + 2)/2)."\n";

for ($index = 0; $index < $n/2; $index++) {
    echo str_repeat("_", $n/2 - $index)."/". str_repeat(".", $index)."|||". str_repeat(".", $index)."\\".str_repeat("_", $n/2-$index)."\n";
    $dots = $index;
}

echo str_repeat("_", ($n-4)/2)."/..|||..\\".str_repeat("_",($n-4)/2)."\n";
echo str_repeat("_",($n-2)/2)."/.|||.\\".str_repeat("_",($n-2)/2)."\n";

for ($index2 = 0; $index2 < $n; $index2++) {
    echo str_repeat("_", ($n+2)/2)."|||".str_repeat("_", ($n + 2)/2)."\n";
}

echo str_repeat("_", ($n+2)/2)."~~~".str_repeat("_", ($n + 2)/2)."\n";

for ($index3 = 0; $index3 < $n / 2; $index3++) {
    echo str_repeat("_", $n/2 - $index3)."//". str_repeat(".", $index3)."!". str_repeat(".", $index3)."\\\\".str_repeat("_", $n/2-$index3)."\n";
}



