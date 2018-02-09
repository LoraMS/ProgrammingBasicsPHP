<?php
if (isset($_GET['bgn-input'])) {
    $amount = $_GET['bgn-input'];
}
else{
    $amount = "";
}

if (isset($_GET['bgn-input'])) {
    $bgn = intval($_GET['bgn-input']);
    $eur = $bgn / 1.95583;
    // echo "EUR: $eur";
}
else{
    $eur = "";
}
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <span>BGN: </span>
            <input type="number" name="bgn-input" value="<?php echo($amount); ?>"/>
            <input type="submit" name="convert" value="Convert" />
        </form>
        <?= $eur === "" ? "" : "EUR: " . $eur; ?>
    </body>
</html>
