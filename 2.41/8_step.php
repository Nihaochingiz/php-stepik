<?php

$arr = [2, 1, 3, 5, -1, 5, 10];
$sum = 0;
$length = count($arr);

for ($i = 0; $i <  $length; $i++) {

    if ($arr[$i] < 0) {
        break;
    }
        $sum +=$arr[$i];
}
echo $sum;
