<?php
//fscanf(STDIN, "%s", $str);
$str = 'qwerty.png';
$pattern = '.png';

if (substr($str, -4) === $pattern) {
    echo '+++';
} else {
    echo '---';
}





