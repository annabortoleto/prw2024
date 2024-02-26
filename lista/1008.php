<?php

$numFuncionario = intval (readline());
$horasTrabalhadas = intval (readline());
$valorHora = floatval (readline());

echo "NUMBER = $numFuncionario\nSALARY = U$ " . number_format ($horasTrabalhadas * $valorHora, 2, ".", "") . "\n";

?>