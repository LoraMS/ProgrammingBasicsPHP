<?php

$input = explode(' ', strtolower(readline()));
$counts = [];

for ($i = 0; $i < count($input); $i++) {
    if(!isset($counts[$input[$i]])){
        $counts[$input[$i]] = 1;
    } else {
        $counts[$input[$i]] ++;
    }
}

$result = [];
foreach ($counts as $key=>$value) {
    if($value % 2 !== 0){
        $result[] = $key;
    }
}

echo implode(', ', $result);

