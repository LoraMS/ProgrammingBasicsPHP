<?php
$input = trim(fgets(STDIN));
$table = explode(", ", $input);
$result = [];

for($i = 0; $i < count($table); $i++){
    $element = $table[$i];

    if(!isset($result[$element])){
        $result[$element] = 1;
    } else {
        $result[$element] ++;
    }
}

// $result = array_count_values($table);

$unique = [];
foreach ($result as $key => $value) {
    if ($value === 1) {
        $unique[] = $key;
    }
}

foreach ($unique as $val){
    echo $val.' ';
}