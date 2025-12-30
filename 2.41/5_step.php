<?php

$result = 0;

for ($i = 2; $i <= 10; $i++) {
    
    if ($i % 2 == 0) {
        $result += $i;
    }
}
echo $result;