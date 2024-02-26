<?php

$ent = explode(" ", readline());
$x = intval($ent[0]);
$y = intval($ent[1]);
$z = intval($ent[2]);

if ($x > $y)
    $maior = $x;
else
    $maior = $y;

if ($maior < $z)
    $maior = $z;

echo "$maior eh o maior\n";

?>