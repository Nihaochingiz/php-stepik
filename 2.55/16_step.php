<?php
$arr = [1, 2, 3, 4];

function getSumArr($arr) {
    $sum = 0;
    forEach ($arr as $element) {
        $sum += $element;
    }
    return $sum;
}

echo(getSumArr($arr));