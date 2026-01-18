<?php

$currentYear = date('Y');

$newYearTimestamp = mktime(0, 0, 0, 12, 31, $currentYear);

echo $newYearTimestamp;


// SOLUTION: echo 1767139200