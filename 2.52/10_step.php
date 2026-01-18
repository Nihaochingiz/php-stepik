<?php
fscanf(STDIN, "%d %d %d", $num1, $num2, $num3);
// $num1 = 8;
// $num2 = 11;
// $num3 = 10;

function sum($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    echo $sum;
}

sum($num1, $num2, $num3);