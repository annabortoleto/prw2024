<?php

$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));

if ($X > $Y) {
    $t = $X;
    $X = $Y;
    $Y = $t;
}

$soma = 0;

for ($num = $X + 1; $num < $Y; $num++) {
    if ($num % 2 != 0) {
        $soma += $num;
    }
}

echo $soma . "\n";
?>