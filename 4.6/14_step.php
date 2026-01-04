<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Привет, меня зовут " . $this->name;
    }
}

$ivan = new User("Анна");

$ivan->sayHello();