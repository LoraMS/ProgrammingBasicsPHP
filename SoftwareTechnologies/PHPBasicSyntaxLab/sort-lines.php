<?php
$sortedLines = "";
if (isset($_GET['lines'])) {
    $lines = explode("\n", $_GET['lines']); //array explode ( string $delimiter , string $string), returns an array of strings
    $lines = array_map('trim', $lines);
    sort($lines, SORT_STRING);
    $sortedLines = implode("\n", $lines); //string implode ( string $glue , array $pieces ), join array elements, returns a string
}
?><form>
    <textarea name="lines" rows="10"><?= $sortedLines ?></textarea>
    <br/>
    <input type="submit" value="Sort">
</form>