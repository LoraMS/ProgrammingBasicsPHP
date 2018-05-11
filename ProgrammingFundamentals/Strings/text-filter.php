<?php

$bannedWords = readline();
$bannedWordsArr = explode(", ", $bannedWords);
$text = readline();
$result = '';

//echo str_replace($bannedWordsArr, "****", $text);

for ($i = 0; $i < count($bannedWordsArr); $i++) {
    $len = strlen($bannedWordsArr[$i]);
    $text = str_replace($bannedWordsArr[$i], str_repeat("*", $len), $text);
}

echo $text;