<?php
$arr = [2, -3, 5, -2, -1, 5, 6];
$sum = 0;
foreach ($arr as $element) {
    
    if ($element > 0) {
        $sum += $element;
    }
}
    echo($sum);



