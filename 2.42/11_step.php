<?php
$arr = [2, 1, 3, 5, 16, 0, -1, 5, -3, 10];
$sum = 0;


foreach ($arr as $element) {
    if ($element < 0 ) {
        break; 
    }
    $sum += $element;
}
echo($sum);


