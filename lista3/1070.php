<?php

$X = intval(fgets(STDIN));

$impares = 0;

while ($impares < 6) {
    if ($X % 2 != 0) {
        echo $X . "\n";
        $impares++;
    }
    $X++;
}
?>
