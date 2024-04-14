<?php

function menorValor($vetor) {
    $menorValor = $vetor[0];
    $posicao = 0;
    for ($i = 1; $i < count($vetor); $i++) {
        if ($vetor[$i] < $menorValor) {
            $menorValor = $vetor[$i];
            $posicao = $i;
        }
    }
    return array($menorValor, $posicao);
}

$N = intval(fgets(STDIN));

$valores = array_map('intval', explode(' ', fgets(STDIN)));

$resultado = menorValor($valores);
$menorValor = $resultado[0];
$posicao = $resultado[1];

echo "Menor valor: $menorValor\n";
echo "Posicao: $posicao\n";
?>