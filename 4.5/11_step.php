<?php

class Animal {
    function makeSound() {
        echo("Какой-то звук");
    }
}

class Dog extends Animal {
        function makeSound() {
            echo("Гав!");
    }
}

$sharik = new Dog;
$sharik->makeSound();
