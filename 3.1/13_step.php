<?php
//fscanf(STDIN, "%d", $num);

function isPositive ($num) : string {
    if ($num > 0) {
        return "positive";
    } else if ($num < 0) {
        return "negative";
    } else if ($num === 0) {
        return "zero";
    }
}

echo(isPositive($num));

