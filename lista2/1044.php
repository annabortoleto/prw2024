<?php

list($x, $y) = array_map('intval', explode(' ', readline()));

if ($x % $y == 0 || $y % $x == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
?>