<?php

function crescente($valores) {
    sort($valores);
    return $valores;
}

function mostrarValores($valores) {
    foreach ($valores as $valor) {
        echo $valor . PHP_EOL;
    }
}

$valores = explode(" ", readline());

$ordenar = crescente($valores);

mostrarValores($ordenar);

echo PHP_EOL;

mostrarValores($valores);
?>