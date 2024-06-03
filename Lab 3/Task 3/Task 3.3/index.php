<?php
$file = file_get_contents('./file.txt');

$array = explode(' ', $file);

sort($array);
echo '<pre>';
print_r($array);