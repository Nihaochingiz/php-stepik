<?php
fscanf(STDIN, "%d", $num);
$num = (int)$num;

if ($num > 0 && $num < 5) {
    echo('+++');
} else {
       echo('---');
}



