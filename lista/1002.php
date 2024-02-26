<?php

$raio = doubleval(readline());
$area = 3.14159 * ($raio * $raio);
echo "A=" . number_format($area, 4, ".", "") . "\n";

?>