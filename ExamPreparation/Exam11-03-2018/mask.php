<?php

$n = intval(readline());

for ($index = 0; $index < $n - 1; $index++) {
    echo str_repeat(" ", $n - 2 - $index)."/".str_repeat(" ", $index)."|  |".str_repeat(" ", $index)."\\\n";
}

echo str_repeat("-", 2*$n + 2)."\n";
echo "|". str_repeat(" ", ($n-3)/2)."_".str_repeat(" ", $n + 1)."_". str_repeat(" ",($n-3)/2)."|\n";
echo "|". str_repeat(" ", ($n-3)/2)."@".str_repeat(" ", $n + 1)."@". str_repeat(" ",($n-3)/2)."|\n";

for ($index1 = 0; $index1 < floor($n/2); $index1++) {
    echo "|". str_repeat(" ", 2*$n)."|\n";
}

echo "|". str_repeat(" ", $n - 1)."OO". str_repeat(" ", $n - 1)."|\n";
echo "|". str_repeat(" ", $n - 2)."/  \\". str_repeat(" ", $n - 2)."|\n";
echo "|". str_repeat(" ", $n - 2)."||||". str_repeat(" ", $n - 2)."|\n";

for ($index2 = 0; $index2 < $n + 1; $index2++) {
    echo str_repeat("\\", $index2 + 1).str_repeat("`", 2*$n - 2*$index2).str_repeat("/", $index2 + 1)."\n";
}