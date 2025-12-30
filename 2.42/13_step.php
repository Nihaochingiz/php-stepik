<?php
$arr = [0, -1, 2, -3, -4, 5, 6, -8, 9, 11, -7, 23];

foreach ($arr as $value) {
    if ($value <= 0) {
        continue;
    }
    echo($value);
}
