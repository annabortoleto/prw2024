<?php

$distancia = intval(readline());
$consumo = floatval(readline());

echo number_format($distancia / $consumo, 3, ".", "") . " km/l\n";

?>