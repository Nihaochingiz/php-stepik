<?php

function getThirdTheBiggest($arr) {
    // Убираем дубликаты
    $unique = array_unique($arr);
    
    // Если уникальных чисел меньше 3, возвращаем null
    if (count($unique) < 3) {
        return null;
    }
    
    // Сортируем по убыванию
    rsort($unique);
    
    // Возвращаем третий элемент (индекс 2, так как массив начинается с 0)
    return $unique[2];
}

