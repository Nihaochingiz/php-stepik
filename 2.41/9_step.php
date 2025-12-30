<?php
$arr = [2, 4, 5, 3, 5, 7];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {

     if ($arr[$i] == 3) {
        echo $i;
        break;
     }
}
