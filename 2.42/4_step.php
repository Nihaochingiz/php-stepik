<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$length = count($arr);
$sum = 0;

foreach ($arr as $elem) {
    $sum += $elem;
}
$mean = $sum / $length;

echo($mean);



