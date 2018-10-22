<?php

include 'Number.php';

$input = trim(intval(fgets(STDIN)));

$num = new Number($input);

echo $num->lastDigitAsWord();