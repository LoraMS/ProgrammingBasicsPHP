<?php

$arr = explode(', ', readline());
$result = [];

for ($i = 0; $i < count($arr); $i++) {
    if (!isset($result[$arr[$i]])) {
        $result[$arr[$i]] = 1;
    } else {
        $result[$arr[$i]] += 1;
    }
}

foreach ($result as $key=>$value) {
    if ($value === 1) {
        echo $key . ' ';
    }
}
