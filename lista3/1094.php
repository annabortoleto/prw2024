<?php

$cobaias = 0;
$coelhos = 0;
$ratos = 0;
$sapos = 0;

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {

    list($quant, $tipo) = explode(" ", fgets(STDIN));

    $cobaias += $quant;

    switch ($tipo) {
        case 'C':
            $coelhos += $quant;
            break;
        case 'R':
            $ratos += $quant;
            break;
        case 'S':
            $sapos += $quant;
            break;
    }
}

echo "Total: $cobaias cobaias\n";

echo "Total de coelhos: $coelhos\n";
echo "Total de ratos: $ratos\n";
echo "Total de sapos: $sapos\n";

$percCoelhos = ($coelhos / $cobaias) * 100;
$percRatos = ($ratos / $cobaias) * 100;
$percSapos = ($sapos / $cobaias) * 100;

echo "Percentual de coelhos: " . number_format($percCoelhos, 2) . " %\n";
echo "Percentual de ratos: " . number_format($percRatos, 2) . " %\n";
echo "Percentual de sapos: " . number_format($percSapos, 2) . " %\n";
?>