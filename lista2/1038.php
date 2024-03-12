<?php

$precos = [
    1 => 4.00,
    2 => 4.50,
    3 => 5.00,
    4 => 2.00,
    5 => 1.50
];
    
$valorEntrada = readline ("Escreva o código do produto e a quantidade (separados por espaço): ");
$dados = explode (" ", $valorEntrada);
$codigo = intval ($dados[0]);
$quant = intval ($dados[1]);
    
$total = $precos[$codigo] * $quant;
echo "Total: R$ " . number_format ($total, 2, '.', '') . "\n";

?>