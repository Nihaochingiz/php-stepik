<?php
$arr = [1, 2, 3, 8];
foreach ($arr as &$num) {
    $num += 3;
}
unset($num);
$num = 0;
print_r($arr);