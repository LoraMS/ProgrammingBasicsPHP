<?php

$subject = readline();
$pattern = '/<a.*?href.*?=(.*)>(.*?)<\/a>/';
$replacement = '[URL href=$1]$2[/URL]';

echo preg_replace($pattern, $replacement, $subject);
