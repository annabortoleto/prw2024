<?php

list($a, $b) = array_map('intval', explode(' ', readline()));

if ($a % $b == 0 || $b % $a == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
?>
