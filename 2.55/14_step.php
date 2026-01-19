<?php
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $element) {
    if ($element % 2 === 0) {
        continue;
    }
    echo($element);
}