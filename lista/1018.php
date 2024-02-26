<?php

$valor = intval (readline());
$cedulas = [100, 50, 20, 10, 5, 2, 1];

function calcularCedulas ($valor, $cedulas){
    echo "$valor\n";

    foreach ($cedulas as $cedula){
        $quant = intval ($valor/$cedula);
            $valor %= $cedula;
            
            echo "$quant nota(s) de R$ $cedula,00\n";
    }
}

calcularCedulas ($valor, $cedulas);

?>