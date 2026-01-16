<?php
fscanf(STDIN, "%s", $str);

$stringLength = strlen($str);

if ($stringLength >= 3) {
    echo substr($str, -3), PHP_EOL;
} else {
    echo ("Строка слишком короткая");
}



