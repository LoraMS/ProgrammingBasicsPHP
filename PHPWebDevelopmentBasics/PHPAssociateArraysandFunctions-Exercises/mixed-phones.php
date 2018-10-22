<?php
$list = [];
while(true){
    $line = trim(fgets(STDIN));
    if ($line == "Over") {
        break;
    }

    $item = explode(" : ", $line);
    $first = $item[0];
    $second = $item[1];
    $patternNum = '/[0-9]+/';
    $patternName = '/[A-z]+/';
    if(preg_match($patternName, $first)){
        $result[$first] = $second;
    } else {
        $result[$second] = $first;
    }
}



ksort($result);
foreach ($result as $name=>$phone){
    echo $name." -> ".$phone."\r\n";
}