<?php

class Person {
    public $name = "Иван";
}

class Student extends Person {
    public $course = "1 курс";
}

$ivan = new Student;
echo($ivan->name . PHP_EOL);
echo($ivan->course . PHP_EOL);