<?php

fscanf(STDIN, "%s", $str);
$last = $str[strlen($str) - 1];

if ($last === '0') {
   echo 'Строка заканчивается на 0';
}
else {
    echo 'Строка не заканчивается на 0';
}