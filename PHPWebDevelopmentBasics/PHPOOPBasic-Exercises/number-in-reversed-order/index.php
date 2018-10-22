<?php

include "DecimalNumber.php";

$input = trim(fgets(STDIN));

$num = new DecimalNumber($input);

echo $num->reverseNumber();