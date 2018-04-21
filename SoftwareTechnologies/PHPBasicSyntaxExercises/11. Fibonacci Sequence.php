<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if(isset($_GET['num'])){
        $n = intval($_GET['num']);
        $f1 = 1;
        $f2 = 1;
        $nFib = $f1 + $f2;

        // $numbers = [1, 1, 2];

        echo "$f1 $f2 $nFib ";
        for($i = 3; $i < $n; $i++){
            $f1 = $f2;
            $f2 = $nFib;
            $nFib = $f1 + $f2;

            // ways to add value to array
            // $numbers[] = $nFib;
            // is the same as
            // array_push($numbers, $nFib);

            echo "$nFib ";
        }
    }
    ?>
</body>
</html>