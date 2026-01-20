<?php

function max2($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    }
    return $num2;
}


echo(max2(5, 7)); // 7)

echo(max2(9, 3)); // 9