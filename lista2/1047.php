<?php

list($inicioHora, $inicioMinuto, $fimHora, $fimMinuto) = array_map('intval', explode(' ', readline()));

$inicialMinutos = $inicioHora * 60 + $inicioMinuto;
$finalMinutos = $fimHora * 60 + $fimMinuto;

if ($finalMinutos <= $inicialMinutos) {
    $finalMinutos += 24 * 60;
}
$duracaoMinutos = $finalMinutos - $inicialMinutos;
$duracaoHoras = intdiv($duracaoMinutos, 60);
$duracaoMinutos %= 60;

echo "O JOGO DUROU " . $duracaoHoras . " HORA(S) E " . $duracaoMinutos . " MINUTO(S)\n";
