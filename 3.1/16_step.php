<?php
$arr = [1, 2, 3, 4];
$reversedArr = [];

$arrLength = count($arr);

for ($i = $arrLength - 1; $i >=0; $i--) { 
   $reversedArr[] = $arr[$i];

}
print_r($reversedArr);



function reverseArray($arr) {
    $reversedArr = [];
    $length = count($arr);
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedArr[$length - $i - 1] = $arr[$i];
    }
    
    return $reversedArr;
}


