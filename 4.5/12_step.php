<?php

class Shape {
    function getArea() {
        return 0;
    }
}

class Square extends Shape {
    public $side;

    function getArea() {
        $area = $this->side * $this->side;
        return $area;
    }
}

$mySquare = new Square();
$mySquare->side = 4;
echo($mySquare->getArea());


