<?php
$nome = readline();
$salario = doubleval(readline());
$vendas = doubleval(readline());

echo "TOTAL = R$ " . number_format($salario + (0.15 * $vendas), 2, ".", "") . "\n";
?>