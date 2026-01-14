<?php
$number = 587;
$sqrt = sqrt($number);

$floor = floor($sqrt);
$ceil = ceil($sqrt);

$result = [
    'ceil' => $ceil,
    'floor' => $floor
];

print_r($result);
