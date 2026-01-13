<?php

class Student {
    protected $firstName;
    protected $lastName;
    protected $group;
    protected $averageMark;

    public function __construct($firstName, $lastName, $group, $averageMark) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }

    public function getScholarship() {
        return $this->averageMark == 5 ? 5000 : 3000;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function displayScholarship() {
        echo $this->getFullName() . " получает стипендию: " . $this->getScholarship()
        . " руб.\n";
    }
}


class Aspirant extends Student {
        private $researchWork;

        public function __construct($firstName, $lastName, $group, $averageMark, $researchWork)
        {
            parent::__construct($firstName, $lastName, $group, $averageMark);
            $this->researchWork = $researchWork;
        }

        public function getScholarship() 
        {
            return $this->averageMark == 5 ? 6000 : 4000;
        }
    }


$students = [
    new Student("Иван", "Иванов", "Группа 101", 5),
    new Student("Петр", "Петров", "Группа 102", 4),
    new Aspirant("Сергей", "Сергеев", "Аспиранты", 5, "Исследование алгоритмов"),
    new Aspirant("Анна", "Сидорова", "Аспиранты", 4, "Машинное обучение")
];

foreach ($students as $student) {
    $student->displayScholarship();
}