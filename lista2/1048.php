<?php

$salario = floatval(readline());

$novo = $reajuste = $percentual = 0;

if ($salario <= 400.00) {
    $percentual = 15;
} elseif ($salario <= 800.00) {
    $percentual = 12;
} elseif ($salario <= 1200.00) {
    $percentual = 10;
} elseif ($salario <= 2000.00) {
    $percentual = 7;
} else {
    $percentual = 4;
}

$reajuste = $salario * ($percentual / 100);
$novo = $salario + $reajuste;

echo "Novo salario: " . number_format($novo, 2, '.', '') . "\n";
echo "Reajuste ganho: " . number_format($reajuste, 2, '.', '') . "\n";
echo "Em percentual: " . $percentual . " %\n";

?>
