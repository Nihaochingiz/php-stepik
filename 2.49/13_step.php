<?php
fscanf(STDIN, "%s", $date);
//$date= '2023-07-18';
$parts = explode("-", $date);
$reordered_parts = [$parts[2], $parts[1], $parts[0]];
$result = implode('.', $reordered_parts);
echo($result);







