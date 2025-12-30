<?php

$arr = [3, 5, 7, 9, 0, 4, 6, 7];

$length = count($arr);
for ($i = 0; $i <  $length; $i++) {

    if ($arr[$i] == 0) {
        break;
    }
        echo $arr[$i];
}

