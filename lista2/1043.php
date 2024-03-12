<?php

list($x, $y, $z) = array_map('floatval', explode(' ', readline()));


if (($x + $y > $z) && ($x + $z > $y) && ($y + $z > $a)) {
    $perimetro = $x + $y + $z;
    
echo "Perimetro = " . number_format($perimetro, 1, '.', '') . "\n";
} else {
    $area = (($x + $y) * $z)/2;
    echo "Area = " . number_format($area, 1, '.', '') . "\n";
}
?>