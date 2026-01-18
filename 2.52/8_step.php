<?php
fscanf(STDIN, "%d", $num);

function checkNumber($num) {
    echo $num > 0 ? '+++' : '---';
}

checkNumber($num);