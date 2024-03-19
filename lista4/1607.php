<?php

function calcular($A, $B) {
    $n = strlen($A);
    $ops = 0;

    for ($i = 0; $i < $n; $i++) {
        $dif = ord($B[$i]) - ord($A[$i]);
        if ($dif < 0) {
            $dif += 26;
        }
        $ops += $dif;
    }

    return $ops;
}

$teste = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $teste; $i++) {
    list($A, $B) = explode(" ", trim(fgets(STDIN)));
    $operacoes = calcular($A, $B);
    echo $operacoes . "\n";
}

?>