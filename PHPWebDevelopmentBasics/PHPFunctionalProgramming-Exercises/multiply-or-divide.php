<?php
$input = [
    ['sum', 12, 133],
    ['subtract', 3, 3],
    ['sum', 1, 2],
    ['divide', 100, 0],
    ['divide', 100, 'PP'],
    ['sum', 'P123', 123]
];

$sumOperation = function ($a, $b) {
    return $a + $b;
};
$subtractOperation = function ($a, $b) {
    return $a - $b;
};
$multiplyOperation = function ($a, $b) {
    return $a * $b;
};
$divideOperation = function ($a, $b) {
    return ($b == 0) ? 'division_by_zero' : $a / $b;
};
$calculate = function (&$calculate, $input, $i = 0, $output = []) use ($sumOperation, $subtractOperation, $multiplyOperation, $divideOperation) {
    if ($i < count($input)) {
        $operation = $input[$i][0];
        $a = $input[$i][1];
        $b = $input[$i][2];
        if (!is_numeric($a)) {
            $output[] = 'op1_not_numeric';
        } elseif (!is_numeric($b)) {
            $output[] = 'op2_not_numeric';
        } elseif ($a < 0 or $a > 100 or $b < 0 or $b > 100) {
            $output[] = 'out_of_range';
        } elseif ($operation === 'sum') {
            $output[] = $sumOperation($a, $b);
        } elseif ($operation === 'subtract') {
            $output[] = $subtractOperation($a, $b);
        } elseif($operation === 'multiply'){
            $output[] = $multiplyOperation($a, $b);
        } elseif($operation === 'divide'){
            $output[] = $divideOperation($a, $b);
        }
        return $calculate($calculate, $input, $i + 1, $output);
    } else {
        return $output;
    }
};

$output = $calculate($calculate, $input);
print_r($output);