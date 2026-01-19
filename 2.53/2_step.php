<?php

function createCube($num) {
    return ($num**3);
}

$res = createCube(2) + createCube(3);

echo($res);