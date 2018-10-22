<form method="get">
    <textarea name="text" id="text" cols="30" rows="10">

    </textarea>
    <input type="submit" name="color" value="Color text">
</form>

<?php
if(isset($_GET['color'])){
    $text = trim($_GET['text']);
    for($i = 0; $i < strlen($text); $i++){
        $char = ord($text[$i]);
        if($char%2 === 0){
            echo "<span style='color: red'>$text[$i]</span>";
        } else {
            echo "<span style='color: blue'>$text[$i]</span>";
        }
    }
}