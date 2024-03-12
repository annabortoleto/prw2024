<?php

list($inicioHora, $inicioMinuto, $fimHora, $fimMinuto) = array_map('intval', explode(' ', readline()));

$inicialMinutos = $inicioHora * 60 + $minutoInicial;
$finalMinutos = $fimHora * 60 + $fimMinuto;

$duracaoMinutos = ($finalMinutos - $inicialMinutos + 24 * 60) % (24 * 60);
$duracaoHoras = intdiv($duracaoMinutos, 60);
$duracaoMinutos %= 60;

echo "O JOGO DUROU " . $duracaoHoras . " HORA(S) E " . $duracaoMinutos . " MINUTO(S)\n";

?>