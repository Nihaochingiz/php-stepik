<?php
$user = ['name' => 'john', 'age' => 30];
$name = isset($user['name']) ? $user['name'] : 'unknown';
echo($name);

$user = ['surname' => 'Ivanov', 'thirdname' => 'Ivanovich'];

if (isset($user['name'])) {
   $res = $user['name'];
} elseif (isset($user['surname'])) {
   $res = $user['surname'];
} else {
   $res = '';
}
$res = $user['name'] ?? $user['surname'] ?? '';
echo $res; 
