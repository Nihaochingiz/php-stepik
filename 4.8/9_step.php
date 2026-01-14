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



$ivan = new Teacher("Иван", "Математика");


$petya = new Student("Петя");


echo $ivan->introduce();
echo $petya->introduce();

unset($ivan);
unset($petya);