<?php
$arr = [2, 4, 5, 3, 5, 7, 11, 13, 17, 19, 23, 77];

foreach ($arr as $index => $value) {
    if ($value == 7) {
        echo $index;
    }
}