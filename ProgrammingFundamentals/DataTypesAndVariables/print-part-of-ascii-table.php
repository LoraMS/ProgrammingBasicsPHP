<?php

$start = intval(readline());
$end = intval(readline());

for ($index = $start; $index <= $end; $index++) {
    echo chr($index)." ";
}
