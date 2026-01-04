<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Животное {$this->name} создано!";
    }
}

$favoriteAnimal = new Animal("Кузя");

$favoriteAnimal;