<?php
$users = [
    ['name' => 'Иван', 'age' => 25],
    ['name' => 'Анна', 'age' => 50],
    ['name' => 'Мария', 'age' => 17],
    ['name' => 'Петр', 'age' => 35],
    ['name' => 'Алексей', 'age' => 61],
    ['name' => 'Владимир', 'age' => 16],
    ['name' => 'Ирина', 'age' => 29],
    ['name' => 'Дмитрий', 'age' => 45],
    ['name' => 'Елизавета', 'age' => 32]
];

$i = 0;
while ($i < count($users)) {
    if ($users[$i]['age'] > 60) {
        break; // Выходим из цикла
    }
    echo "{$users[$i]['name']}\n";
    $i++;
}
