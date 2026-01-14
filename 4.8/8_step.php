<?php

class User {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name; 
    }

    public function getName() { 
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() { 
        return $this->age;
    }
}


class Worker extends User {
    private $salary;

    public function __construct($name, $age, $salary) {
        parent::__construct($name, $age); 
        $this->salary = $salary;
    }

    public function getSalary() { 
        return $this->salary; 
    }

    public function setSalary($salary) {
        $this->salary = $salary; 
    }
}

class Student extends User {
    private $grant;
    private $course;

    public function __construct($name, $age, $course, $grant) {
        parent::__construct($name, $age); 
        $this->grant = $grant;
        $this->course = $course;
    }

    public function getGrant() { 
        return $this->grant; 
    }

    public function setGrant($grant) {
        $this->grant = $grant;
    }

    public function getCourse() { 
        return $this->course; 
    }

    public function setCourse($course) {
        $this->course = $course;
    }
}


class Driver extends Worker {
    private $drivingExperience;
    private $drivingCategory;

    public function __construct($name, $age, $salary, $drivingExperience, $drivingCategory) {
        parent::__construct($name, $age, $salary);
        $this->drivingExperience = $drivingExperience;
        $this->drivingCategory = $drivingCategory;
    }

    public function getExperience() {
        return $this->drivingExperience;
    }

    public function getCategory() {
        return $this->drivingCategory;
    }
}

$ivan = new Worker('Иван', 25, 1000);
$vasya = new Worker('Вася', 26, 2000);
$sumSalary = $ivan->getSalary() + $vasya->getSalary();
echo "Сумма зарплат: " . $sumSalary . "\n";

$student = new Student("Петя", 20, 2, 500);
echo "Студент: " . $student->getName() . ", возраст " . $student->getAge() . 
     ", курс " . $student->getCourse() . ", стипендия " . $student->getGrant() . "\n";

$driver = new Driver("Сергей", 30, 2500, 7, "B");
echo "Водитель: " . $driver->getName() . ", возраст " . $driver->getAge() . 
     ", зарплата " . $driver->getSalary() . ", стаж " . $driver->getExperience() . 
     " лет, категория " . $driver->getCategory() . "\n";

