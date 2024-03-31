<?php
while (($historico = fgets(STDIN)) !== false) {
    $historico = trim($historico);
    $numProcessos = intval(trim(fgets(STDIN)));

    $numGravacoes = 0;
    $numLeituras = 0;

    for ($i = 0; $i < strlen($historico); $i++) {
        if ($historico[$i] === 'W') {
            $numGravacoes++;
        }
    }

    for ($i = 0; $i < strlen($historico); $i++) {
        if ($historico[$i] === 'R') {
            $numLeituras++;

            if ($numLeituras > $numProcessos) {
                $numGravacoes++;
                $numLeituras = 1; 
            }
        }
    }

    $numCiclos = $numGravacoes + 1;
    echo $numCiclos . "\n";
}
?>