<?php

function findFirstEven(array $numbers) {
    foreach ($numbers as $num) {
        if ($num % 2 !== 0) {
            continue;
        }
        if ($num > 10) {
            break;
        }
        return $num;
    }
    return null;
}

$nums = [1, 3, 5, 8, 12, 4];
$result = findFirstEven($nums);

echo($result);