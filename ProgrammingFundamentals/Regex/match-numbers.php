<?php

$subject = readline();
$pattern = '/(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))/';

preg_match_all($pattern, $subject, $matches);

foreach ($matches[0] as $value){
    echo $value . ' ';
}

