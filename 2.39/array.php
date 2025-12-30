<?php 

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

    foreach ($arr  as $key => $value) {
        $arr[$key] = $value + 3;
    }
    print_r($arr);