<?php
fscanf(STDIN, "%s", $str);
//$str = 'http://google.com';
$pattern = 'http://';

if (substr($str, 0, strlen($pattern)) === $pattern) {
    echo '+++';
} else {
    echo '---';
}





