<?php

$arr = [10, 20, 30, 50, 235, 3000];

foreach ($arr as $number) {

    $numStr = (string)$number; 

    $firstDigit = $numStr[0];

    if ($firstDigit === '1' || $firstDigit === '2' || $firstDigit === '5') {
        echo $number . "\n";
    }
}