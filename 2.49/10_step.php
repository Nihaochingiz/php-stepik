<?php
//fscanf(STDIN, "%s", $str);

$find = array("a", "b", "c");
$replace = array(1, 2, 3);
$str = 'abcdef';

$new_string = str_replace($find, $replace, $str);

echo $new_string;




