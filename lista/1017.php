<?php

$tempo = intval(readline());
$velo = intval(readline());

$litros = number_format(($tempo * $velo)/12, 3, ".", "");

echo $litros . "\n";

?>