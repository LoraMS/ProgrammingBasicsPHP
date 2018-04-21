<?php

$concat = readline();
$position = readline();
$count = intval(readline());
$result = "";
$counter = 0;

for ($index = 1; $index <= $count; $index++) {
    $word = readline();
    if ($index % 2 !== 0 && $position === "odd") {
        $result .= $word.$concat;
    } elseif($index % 2 === 0 && $position === "even"){
        $result .= $word.$concat;
    }
}

echo substr($result,0, -1);