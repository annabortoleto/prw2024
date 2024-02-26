<?php

$tempoSeg = intval (readline());
$horas = intval ($tempoSeg/3600);
$tempoSeg %= 3600;
$minutos = intval ($tempoSeg/60);
$segundos = $tempoSeg % 60;

echo "$horas:$minutos:$segundos\n";

?>