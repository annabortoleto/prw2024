<?php
$positivos = 0;
$soma = 0;

for ($i = 0; $i < 6; $i++) {
    $valor = floatval(readline());
    if ($valor > 0) {
        $positivos++;
        $soma += $valor;
    }
}

echo "$positivos valores positivos\n";
if ($positivos > 0) {
    $media = $soma / $positivos;
    echo number_format($media, 1, '.', '') . "\n";
}
?>
