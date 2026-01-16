<?php
fscanf(STDIN, "%s", $password);

$passwordLength = strlen($password);
if ($passwordLength > 5 && $passwordLength < 10) {
    echo("Пароль подходит");
} else {
    echo("Придумайте другой пароль");
}






