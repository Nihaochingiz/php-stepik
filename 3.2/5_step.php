<?php
function countWords($str) {
    $words = [];
    $currentWord = '';
    $length = 0;
    
    while (isset($str[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        
        if ($char === ' ') {
            if ($currentWord !== '') {

                if (!isset($words[$currentWord])) {
                    $words[$currentWord] = 1;
                } else {
                    $words[$currentWord]++;
                }
                $currentWord = '';
            }
        } else {
            $currentWord .= $char;
        }
    }
    
    if ($currentWord !== '') {
        if (!isset($words[$currentWord])) {
            $words[$currentWord] = 1;
        } else {
            $words[$currentWord]++;
        }
    }
    
    return $words;
}


$text = "apple banana apple orange banana apple";
$result = countWords($text);

echo "Дана строка: \"$text\"\n";
echo "Ответ:\n";

$first = true;
foreach ($result as $word => $count) {
    echo $word . " - " . $count . "\n";
}