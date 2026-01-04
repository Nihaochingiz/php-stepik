<?php

class Book {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Книга {$this->name} открыта.\n";
    }

    public function __destruct() {
        echo "Книга {$this->name} закрыта.\n";
    }
}


$warAndPeace = new Book("Война и мир");
unset($warAndPeace); 