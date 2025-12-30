<?php

class Transport {
    function move() {
        echo ("Двигаюсь");
    }
}

class RoadTransport extends Transport {
        public function move() {
        parent::move(); // Вызываем метод родителя
        echo " по суше";
    }
}

class Car extends RoadTransport {
        public function move() {
        parent::move(); // Вызываем метод родителя
        echo " на машине";
    }
}

$bmw = new Car();
$bmw->move();