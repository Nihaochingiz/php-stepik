<?php
fscanf(STDIN, "%d", $num);

function isEven($num) {
    return $num % 2 === 0 ? 'even' : 'odd';
}

echo(isEven($num));


