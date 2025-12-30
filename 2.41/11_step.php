<?php
$arr = [-1, 2, -4, 5, 6, -8, 9];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {

    if ($arr[$i] < 0) {
        continue;
    }
    echo $arr[$i];
}

