<?php
$str = 'html css php';

$words = explode(' ', $str);

foreach ($words as $word) {
    echo($word . "\n");
}