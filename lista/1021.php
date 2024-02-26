<?php

$valor = floatval(readline());

$notas = [100, 50, 20, 10, 5, 2];
$moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];

echo "NOTAS:\n";

foreach ($notas as $nota) {
    $quant = intval($valor / $nota);
    $valor = fmod($valor, $nota);
    echo "$quant nota(s) de R$ $nota.00\n";
}

echo "MOEDAS:\n";

foreach ($moedas as $moeda) {
    $quant = intval($valor / $moeda);
    $valor = fmod($valor, $moeda);
    echo "$quant moeda(s) de R$ " . number_format($moeda, 2, '.', '') . "\n";
}
?>