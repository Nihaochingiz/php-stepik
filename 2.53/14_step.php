<?php
$arr = [2, 3, 4, 5, 5, 6];

function isDuplicates($arr) {
    $seen = [];
    
    foreach($arr as $element) {
        if (in_array($element, $seen)) {
            return true; 
        }
        $seen[] = $element;
    }
    
    return false; 
}

var_dump(isDuplicates($arr)); 