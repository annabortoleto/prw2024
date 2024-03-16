<?php

$maior = PHP_INT_MIN;

$posicao = 0;

for ($i = 1; $i <= 100; $i++) {
    $valor = intval(fgets(STDIN));

    if ($valor > $maio) {
        $maior = $valor;
        $posicao = $i;
    }
}

echo $maior . "\n";
echo $posicao . "\n";
?>