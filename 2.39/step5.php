<?php

$num =  123123;
$number_string = (string)$num;
$arrOfNum = str_split($number_string);

$firstSum = $arrOfNum[0] + $arrOfNum[1] +$arrOfNum[2];

$secondSum = $arrOfNum[3] + $arrOfNum[4] +$arrOfNum[5];

if ($firstSum === $secondSum) {
    var_dump(true);
} else {
    var_dump(false);
}