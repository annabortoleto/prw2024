<?php

list($inicio, $fim) = array_map('intval', explode(' ', readline()));

if ($inicio < $fim) {
    $duracao = $fim - $inicio;
} else {
    $duracao = 24 - $inicio + $fim;
}

echo "O JOGO DUROU " . $duracao . " HORA(S)\n";
?>