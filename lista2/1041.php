<?php

$valorEntrada = readline ("Escreva as coordenadas (separadas por espaço): ");
$coord = explode (" ",$valorEntrada);

$x = floatval ($coord[0]);
$y = floatval ($coord[1]);

if ($x == 0 && $y ==0){
    echo "Origem\n";
} elseif ($x == 0){
    echo "Eixo Y\n";
} elseif ($y == 0){
    echo "Eixo X\n";
} elseif ($x > 0 && $y > 0){
    echo "Q1\n";
} elseif ($x < 0 && $y > 0){
    echo "Q2\n";
} elseif ($x < 0 && $y < 0){
    echo "Q3\n";
} elseif ($x > 0 && $y <0){
    echo "Q4\n";
}

?>