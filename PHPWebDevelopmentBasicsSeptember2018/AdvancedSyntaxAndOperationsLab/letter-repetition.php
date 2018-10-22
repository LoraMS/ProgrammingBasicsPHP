<?php

$inpit = readline();
$result = [];

for ($i = 0; $i < strlen($inpit); $i++) {
    if (!isset($result[$inpit[$i]])) {
        $result[$inpit[$i]] = 1;
    } else {
        $result[$inpit[$i]] ++;
    }
}

foreach ($result as $key => $value) {
    echo "$key -> $value\n";
}
