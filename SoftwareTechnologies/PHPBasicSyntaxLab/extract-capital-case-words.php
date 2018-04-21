<form>
    <textarea name="text" rows="10"></textarea>
    <br/>
    <input type="submit" value="Extract">
</form>
<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    preg_match_all('/\w+/', $text, $words);
    // var_dump($words);
    // input: We start by HTML, CSS, JavaScript, JSON and REST.
    // =>
    //    array (size=1)
    //  0 =>
    //    array (size=9)
    //      0 => string 'We' (length=2)
    //      1 => string 'start' (length=5)
    //      2 => string 'by' (length=2)
    //      3 => string 'HTML' (length=4)
    //      4 => string 'CSS' (length=3)
    //      5 => string 'JavaScript' (length=10)
    //      6 => string 'JSON' (length=4)
    //      7 => string 'and' (length=3)
    //      8 => string 'REST' (length=4)
    $words = $words[0];
    $upperWords = array_filter($words, function($word){
        return strtoupper($word) == $word;
    });
    echo implode(", ", $upperWords);
}
?>