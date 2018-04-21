<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $x = intval($_GET['num1']);
    $y = intval($_GET['num2']);
    $z = intval($_GET['num3']);
    $result = '';
    $count = 0;
    $arr = [$x, $y, $z];
    // var_dump($arr);
    echo count(array_filter($arr, function($i){
        return $i <= 0;
    })) % 2 == 0 ? "Positive" : "Negative";
//    foreach ($arr as $item) {
//        if ($item < 0) {
//            $count++;
//        }
//    }
//    if ($x == 0 || $y == 0 || $z == 0) {
//        $result = "Positive";
//    } elseif ($count % 2 != 0) {
//        $result = 'Negative';
//    } else {
//        $result = 'Positive';
//    }
//    echo $result;
}
?>
</body>
</html>