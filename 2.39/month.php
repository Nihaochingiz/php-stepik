<?php
fscanf(STDIN, "%d", $month);

if ($month == 12 || $month == 1 || $month == 2) {
    echo 'зима';
} elseif ($month >= 3 && $month <= 5) {
    echo 'весна';
} elseif ($month >= 6 && $month <= 8) {
    echo 'лето';
} elseif ($month >= 9 && $month <= 11) {
    echo 'осень';
}