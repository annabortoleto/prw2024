<?php

$c = intval(fgets(STDIN));

for ($i = 0; $i < $c; $i++) {
    list($inicio, $fim) = explode(" ", fgets(STDIN));

    $sequenciaCrescente = "";
    for ($j = $inicio; $j <= $fim; $j++) {
        $sequenciaCrescente .= $j;
    }

    $sequenciaDecrescente = strrev($sequencia_crescente);

    $sequenciaEspelho = $sequenciaCrescente . $sequenciaDecrescente;

    echo $sequenciaEspelho . "\n";
}

?>