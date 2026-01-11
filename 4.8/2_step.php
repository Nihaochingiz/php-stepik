<?php

class Book {
    private string $title;
    private string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
        echo "Книга " . $this->title . " создана.\n";
    }
    
    public function __destruct() { 
        echo "Книга {$this->title} закрыта.\n";
    }

    public function getInfo(): string {
        return "Название: {$this->title}, Автор: {$this->author}";
    }
    
    protected function getTitle(): string {
        return $this->title;
    }
    
    protected function getAuthor(): string {
        return $this->author;
    }
}

class EBook extends Book {
    private string $format;

    public function __construct(string $title, string $author, string $format = "PDF") {
        parent::__construct($title, $author);
        $this->format = $format;
    }
    
    public function getInfo(): string {
        return "Название: " . $this->getTitle() . ", Автор: " . $this->getAuthor() . ", Формат: {$this->format}";
    }
}


$electroBook = new EBook("Война и мир", "Толстой", "EPUB");

echo $electroBook->getInfo() . "\n";
