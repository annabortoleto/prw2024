<?php

list($a, $b, $c) = array_map('floatval', explode(' ', readline()));

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    $perimetro = $x + $y + $z;
    echo "Perimetro = " . number_format($perimetro, 1, '.', '') . "\n";
} else {
    $area = (($a + $b) * $c)/2;
    echo "Area = " . number_format($area, 1, '.', '') . "\n";
}
?>