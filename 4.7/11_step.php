<?php

class Rectangle {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->height * $this->width;
    }

}

$exampleRectangle = new Rectangle(5.5, 3.2);

echo($exampleRectangle->getArea());

