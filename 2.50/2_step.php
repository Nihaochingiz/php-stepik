<?php
// $array = ['xyz', 'abc', 123, 'def'];

// $result = in_array('abc', $array) ? '+++': '---';

// echo $result;


$array = ['xyz', 'abc', 123, 'def'];
$arr_length = count($array);
$result;
for ($i= 0; $i < $arr_length ; $i++) { 

   if ($array[$i] === 123) {
        $result = "+++";
        break;
   } else {
        $result = "---";
   }
}
   echo($result);



