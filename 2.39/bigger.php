<?php
fscanf(STDIN, "%d", $test);
$test = (int)$test;

if ($test > 10) {
    print_r('+++');
} else {
    print_r('---');
}

