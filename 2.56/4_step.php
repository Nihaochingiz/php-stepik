<?php

function reverseString($str) : string {
    $newString = '';
    $arrFromString = str_split($str);
    
    for ($i = count($arrFromString) - 1; $i >= 0; $i-- ) {
        $newString .=$arrFromString[$i];

    }
    return $newString;

}
echo (reverseString("hello")); // "olleh"
echo (reverseString("php"));   // "php"