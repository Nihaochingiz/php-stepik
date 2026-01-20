<?php
$arr = [-1, 2, -3, 4];
$positiveArr = [];

foreach ($arr as $element) {

    if ($element > 0) {
        $positiveArr[] = $element;
    }
}

echo implode(",", $positiveArr);

