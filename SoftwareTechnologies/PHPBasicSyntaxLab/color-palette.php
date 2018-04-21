<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Color Palette</title>
</head>
<style>
    div {
        display: inline-block;
        width: 150px;
        padding: 2px;
        margin: 5px;
    }
</style>
<body>
<?php
for($red = 0; $red <= 255; $red +=51){
    for($green = 0; $green <= 255; $green +=51){
        for($blue = 0; $blue <= 255; $blue +=51){
            $color = "rgb($red, $green, $blue)";
            echo "<div style='background:$color'>$color</div>\n";
        }
    }
}
?>
</body>
</html>