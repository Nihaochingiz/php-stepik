<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

$replacements = array(0 => "!", 3 => "!!");

$result = array_replace($arr, $replacements);

print_r($result);
