<?php
$num = 12345;

$num_str = (string) $num;

$first_char = substr($num_str, 0, 1);

if ($first_char === '1' || $first_char === '2' || $first_char === '3') {
    $result = true;
} else {
    $result = false;
}

var_dump($result);