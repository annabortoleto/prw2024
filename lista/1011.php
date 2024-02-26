<?php
$raio = doubleval(readline());
$valorPi = 3.14159;

echo "VOLUME = " . number_format((4.0 / 3) * $valorPi * ($raio ** 3), 3, ".", "") . "\n";
?>