<?php
$arr = [2, 4, 6, 3, 8, 9];

function isEven($arr) {

    forEach($arr as $element) {
        if ($element % 2 !== 0) {
            return false;
        }
    }
    return true;
}

var_dump(isEven($arr));