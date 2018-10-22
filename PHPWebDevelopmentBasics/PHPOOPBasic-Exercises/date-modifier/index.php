<?php

include 'DateModifier.php';

$start = trim(fgets(STDIN));
$end = trim(fgets(STDIN));

$dateToPrint = new DateModifier($start, $end);

echo $dateToPrint;
