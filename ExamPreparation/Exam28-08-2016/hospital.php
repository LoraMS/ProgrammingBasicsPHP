<?php

$days = intval(readline());
$doctors = 7;
$treatedPatients = 0;
$untreatedPatients = 0;

for ($index = 1; $index <= $days; $index++) {
    $patients = intval(readline());
    if ($index % 3 === 0 && $untreatedPatients > $treatedPatients) {
        $doctors += 1;
    }
    if ($patients >= $doctors) {
        $treatedPatients += $doctors;
        $untreatedPatients += $patients - $doctors;
    } else {
        $treatedPatients += $patients;
    }
}

echo "Treated patients: $treatedPatients.\n";
echo "Untreated patients: $untreatedPatients.";
        

