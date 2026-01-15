<?php

class Person {
    protected string $name;

    public function __construct(string $name) 
    {
        $this->name = $name;
        echo "Участник школы {$this->name} зарегистрирован.\n";
    }

    public function getName(): string 
    { 
        return $this->name; 
    }

    public function introduce(): string 
    {
        return "";
    }
    
    public function attend(string $place): void
    {
        if (strlen($place) < 3) {
            echo "{$this->name} отказывается туда идти.\n";
        } else {
            echo "{$this->name} посещает {$place}.\n";
        }
    }
    
    public function __destruct()
    {
        echo "Участник школы {$this->name} покидает школу.\n";
    }
}

class Teacher extends Person {
    private string $subject;

    public function __construct($name, $subject) {
        parent::__construct($name);
        $this->subject = $subject;
        echo "Учитель предмета {$this->subject} готов к работе.\n";
    }

    public function introduce(): string  
    {
        return "Я учитель, преподаю {$this->subject}.\n";
    }
}

class Student extends Person {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function introduce(): string  
    {
        return "Я ученик, меня зовут {$this->name}.\n";
    }
}

class HeadTeacher extends Person {
    private array $phrases;

    public function __construct($name) {
        parent::__construct($name);
        $this->phrases = [
            "Следите за дисциплиной!", 
            "Учитесь усерднее!", 
            "Не опаздывайте на уроки!"
        ];
    }

    public function introduce(int $index = -1): string  
    {
        if ($index >= 0 && $index < count($this->phrases)) {
            return $this->phrases[$index];
        } else if ($index == -1) {
            return ""; // Для совместимости с вызовом без параметров
        } else {
            return "Нет такой фразы.";
        }
    }
}


$ivan = new Teacher("Иван", "Математика");
$petya = new Student("Петя");
$olga = new HeadTeacher("Ольга");

echo $ivan->introduce();
$ivan->attend("класс");


echo $petya->introduce();
$petya->attend("библиотеку");

echo $olga->introduce(0) . "\n";
echo $olga->introduce(2) . "\n";

$olga->attend("спортзал");


unset($ivan);
unset($petya);
unset($olga);