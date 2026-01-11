<?php

class Worker {
    private $name;
    private $age;   
    private $salary;

    private function checkAge($age) {
        return $age >= 1 && $age <= 100;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Вася');
$vasya->setAge(26);
$vasya->setSalary(2000);


echo ("Сумма зарплат: " . ($ivan->getSalary() + $vasya->getSalary())) . PHP_EOL;
echo ("Сумма возрастов: " . ($ivan->getAge() + $vasya->getAge())) . PHP_EOL;