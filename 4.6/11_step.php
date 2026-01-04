<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Пользователь " . $this->name . " создан.";
    }
}

$ivan = new User("Иван");

$ivan->name;