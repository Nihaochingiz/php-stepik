<?php
$num = 100;

function TwoDivision($num) {
    for ($count = 0; $num >= 10; $count++) {
        $num = $num / 2;
    }
    return $count;
}

echo TwoDivision($num);