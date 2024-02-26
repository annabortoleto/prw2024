<?php

$l1 = explode(" ",fgets(STDIN));
$l2 = explode(" ",fgets(STDIN));

$x1 = floatval($l1[0]);
$y1 = floatval($l1[1]);
$x2 = floatval($l2[0]);
$y2 = floatval($l2[1]);

$valorDistancia = number_format(sqrt(pow($x2-$x1,2)+ pow($y2-$y1,2)),4,".","");

echo $valorDistancia."\n"
?>