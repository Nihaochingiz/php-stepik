<?php

class Phone {
    private $number;
    private $model;
    private $weight;

    public function __construct($number, $model, $weight) {
        $this->number = $number;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getModel() {
        return $this->model;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function receiveCall($name) {
        return "Звонит $name";
    }

    public function getDescription() {
        return "Модель: {$this->model} Вес: {$this->weight}";
    }
}

$phone1 = new Phone("123-456", "Nokia 3310", 133);
$phone2 = new Phone("987-654", "iPhone 15", 200.5);
$phone3 = new Phone("555-777", "Samsung Galaxy S24", 195.2);

echo "Телефон 1: Номер " . $phone1->getNumber() . ", Модель " . $phone1->getModel() . ", Вес " . $phone1->getWeight() . "\n";
echo "Телефон 2: Номер " . $phone2->getNumber() . ", Модель " . $phone2->getModel() . ", Вес " . $phone2->getWeight() . "\n";
echo "Телефон 3: Номер " . $phone3->getNumber() . ", Модель " . $phone3->getModel() . ", Вес " . $phone3->getWeight() . "\n";

echo $phone1->receiveCall("Мама") . "\n";
echo $phone2->receiveCall("Папа") . "\n";
echo $phone3->receiveCall("Друг") . "\n";

echo $phone1->getDescription() . "\n";
echo $phone2->getDescription() . "\n";
echo $phone3->getDescription() . "\n";