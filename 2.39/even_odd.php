<?php
fscanf(STDIN, "%d", $num);

$res = $num % 2;

if ($res === 0) {
   echo 'Четное';
} else {
   echo 'Нечетное';
}