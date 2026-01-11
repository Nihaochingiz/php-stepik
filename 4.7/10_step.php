<?php

class MathOperations {

    public function add(int $a, int $b): int {
        return $a + $b;
    }
}


$myOperation = new MathOperations;

echo($myOperation->add(5,7));