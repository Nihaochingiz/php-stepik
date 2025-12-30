<?php
class Transport {
    function move() {
        echo("Двигается");
    }
}

class Car extends Transport {
    function move() {
        echo("Едет по дороге");
    }
}

class Bike extends Transport {
    function move() {
        echo("Едет по велодорожке");
    }
}

$transports = [new Car(), new Bike()];

foreach ($transports as $transport) {
    $transport->move();
    echo PHP_EOL;
}