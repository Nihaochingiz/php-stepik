<?php

$sum = 0;
$count = 0;
 
for ($i = 1; ; $i++) {
    $sum += $i;
    $count++;

     if ($sum > 100) {
         break;
     }
}
    echo($count);