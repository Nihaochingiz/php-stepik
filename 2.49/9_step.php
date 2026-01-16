<?php
$str = '31.12.2013';
$search_for = '.';
$replace_with = '-';

$new_string = str_replace($search_for, $replace_with, $str);

echo($new_string);

