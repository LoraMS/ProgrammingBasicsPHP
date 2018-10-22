<?php

$arr = explode(', ', readline());
$result = [];

for ($i = 0; $i < count($arr); $i++) {
    if($i % 2 === 0){
        if(!isset($result[$arr[$i]])){
            $result[$arr[$i]] = intval($arr[$i + 1]);
        } else {
            $result[$arr[$i]] += intval($arr[$i + 1]);
        }
    }
}

foreach ($result as $key => $value) {
    echo "$key => $value\n";
}

