<?php

function verificar($A, $B) {
    $tamanhoB = strlen($B);
    $tamanhoA = strlen($A);

    if ($tamanhoB > $tamanhoA) {
        return "nao encaixa";
    }

    $finalA = substr($A, $tamanhoA - $tamanhoB, $tamanhoB);

    if ($finalA === $B) {
        return "encaixa";
    } else {
        return "nao encaixa";
    }
}

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    list($A, $B) = explode(" ", trim(fgets(STDIN)));

    echo verificar($A, $B) . "\n";
}

?>