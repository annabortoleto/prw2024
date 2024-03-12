<?php

$valorEntrada = readline ("Escreva os valors X,Y e Z (números separados por espaço): ");
$valores = explode (" ", $valorEntrada);

$X = floatval ($valores[0]);
$Y = floatval ($valores[1]);
$Z = floatval ($valores[2]);

$delta = pow($Z, 2) - 4*$X*$Z;

if ($X == 0 || $delta < 0 ){
    echo "Impossivel calular\n";
}else{
    $R1 = (-$Y + sqrt($delta))/(2*$X);
    $R2 = (-$Y - sqrt($delta))/(2*$X);
    
    echo "R1=" . number_format($R1, 5, '.','') . "\n";
    echo "R2=" . number_format($R2, 5, '.','') . "\n";
}
?>