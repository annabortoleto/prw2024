<?php

$n = intval(readline());
$teto = explode(" ", readline());
$chao = explode(" ", readline());

function calcularMudancas($n, $teto, $chao) {
    $mudancas = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($teto[$i] > $chao[$i]) {
            $mudancas++;
        }
    }

    return $mudancas;
}

echo calcularMudancas($n, $teto, $chao);

?>