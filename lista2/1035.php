<?php

$valorEntrada = readline ("Escreva os valores de X,Y,Z e W (números separados por um espaço): ");
$valores= explode (" ",$valorEntrada);

$X = intval ($valores[0]);
$Y = intval ($valores[1]);
$Z = intval ($valores[2]);
$W = intval ($valores[3]);

if ($Y>$Z && $W> $X && ($Z+$W) > ($X+$Y) && $Z>0 && $Z>0 && $X%2 == 0){
echo "Valores aceitos\n";
}else {
    echo "Valores nao aceitos\n";
}

?>