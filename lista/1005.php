<?php

$x = doubleval (readline());
$y = doubleval (readline());

$media = ($x * 3.5 + $y * 7.5) / 11;
echo "MEDIA = " . number_format ($media, 5, ".", "") . "\n";

?>