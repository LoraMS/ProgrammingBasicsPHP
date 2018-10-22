<?php
$input = trim(fgets(STDIN));
$template = '<?xml version="1.0" encoding="UTF-8"?>
  <quiz>
    <question>
      {question text}
    </question>
    <answer>
      {answer text}
    </answer>
  </quiz>';

$data = explode(", ", $input);
$question = trim($data[0]);
$answer = trim($data[1]);
$output = str_replace("{question text}", $question, $template);
$output = str_replace("{answer text}", $answer, $output);
echo $output;