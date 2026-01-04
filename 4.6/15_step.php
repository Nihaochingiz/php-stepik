<?php

class Calculator {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Калькулятор {$this->name} готов к работе.\n";
    }

    public function add($a, $b) {
        return $a + $b;
    }
}

class AdvancedCalculator extends Calculator {
    public function __construct($name) {
        parent::__construct($name);
        echo "Расширенные функции активированы.\n";
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function __destruct() {
        echo "Калькулятор {$this->name} завершает работу.\n";
    }
}
$superCalculator = new AdvancedCalculator("SuperCalc");

echo($superCalculator->add(7,8). "\n");
echo($superCalculator->multiply(6,9). "\n");
unset($superCalculator); 