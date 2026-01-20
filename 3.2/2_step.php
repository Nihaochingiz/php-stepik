<?php

function countA($str) {
    $arrFromString = str_split($str);
    $counter = 0;

    foreach($arrFromString as $element) {
        if ($element == 'a') {
            $counter++;
        }
    }
     return $counter;
}


print_r(countA("banana")); // 3
echo(countA("php"));    // 0