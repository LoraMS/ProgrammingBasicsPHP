<?php

$subject = readline();
$pattern = '/\b(?<day>\d{2})(\/|-|.)(?<month>[A-Z][a-z]{2})\2(?<year>\d{4})\b/';

preg_match_all($pattern, $subject, $matches);

$days = [];
$months = [];
$years = [];

//print_r($matches['day']);
//print_r($matches['month']);
//print_r($matches['year']);


foreach ($matches['day'] as $value) {  
    $days[] = $value;
}
    
foreach ($matches['month'] as $value) {  
    $months[] = $value;
}

foreach ($matches['year'] as $value) {  
    $years[] = $value;
}

for ($index = 0; $index < count($matches['day']); $index++) {
    $day = $days[$index];
    $month = $months[$index];
    $year = $years[$index];
    
    echo "Day: $day, Month: $month, Year: $year\n";
}

    



