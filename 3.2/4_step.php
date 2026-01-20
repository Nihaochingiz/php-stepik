<?php

function min3($arr) {
    if (empty($arr)) {
        return null; 
    }
    
    $min = $arr[0]; 
    
    for ($i = 1; $i < count($arr); $i++) {
        
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    
    return $min;
}