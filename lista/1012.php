<?php
$linha = explode(" ", readline());
$x = doubleval($linha[0]);
$y = doubleval($linha[1]);
$z = doubleval($linha[2]);
$valorPi = 3.14159;

echo "TRIANGULO: " . number_format(($x * $z / 2), 3, ".", "") . "\n";
echo "CIRCULO: " . number_format(($valorPi * ($z * $z)), 3, ".", "") . "\n";
echo "TRAPEZIO: " . number_format((($x + $y) * $z / 2), 3, ".", "") . "\n";
echo "QUADRADO: " . number_format(($y * $y), 3, ".", "") . "\n";
echo "RETANGULO: " . number_format(($y * $x), 3, ".", "") . "\n";

?>