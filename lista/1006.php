<?php

$x = doubleval(readline());
$y = doubleval(readline());
$z = doubleval(readline());

$media = ($x * 2 + $y * 3 + $z * 5) / 10;
echo "MEDIA = " . number_format($media, 1, ".", "") . "\n";

?>