<?php

$subject = readline();
$pattern = '/\b(?:0x)?[0-9A-F]+\b/';

preg_match_all($pattern, $subject, $matches);

foreach ($matches[0] as $value) {
    echo $value . " ";
}

