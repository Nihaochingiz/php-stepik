<?php
class Reader 
{
    private string $fullName;
    private string $libraryCard;
    private string $faculty;
    private string $birthDate;
    private string $phone;

    public function __construct(
        string $fullName,
        string $libraryCard,
        string $faculty,
        string $birthDate,
        string $phone
    ) {
        $this->fullName = $fullName;
        $this->libraryCard = $libraryCard;
        $this->faculty = $faculty;
        $this->birthDate = $birthDate;
        $this->phone = $phone;
    }

    public function takeBook(array $bookNames): string 
    {
        $booksList = implode(', ', $bookNames);
        return "{$this->fullName} взял книги: {$booksList}";
    }

    public function returnBook(array $bookNames): string 
    {
        $booksList = implode(', ', $bookNames);
        return "{$this->fullName} вернул книги: {$booksList}";
    }
}

$reader = new Reader("Петров В. В.", "12345", "Филологический", "1990-05-15", "+7-999-123-45-67");

$books = ["Приключения", "Словарь", "Энциклопедия"];

echo $reader->takeBook($books) . "\n";
echo $reader->returnBook($books) . "\n";