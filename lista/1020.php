<?php

$idadeEmDias = intval (readline());
$anos = intval ($idadeEmDias/365);
$idadeEmDias %= 365;
$meses = intval ($idadeEmDias / 30);
$dias = intval ($idadeEmDias % 30);

echo"$ano ano(s)\n $meses mes(es)\n $dias dia(s)\n";

?>