<?php

function par($numero) {
    return $numero % 2 == 0;
}

$valores = array();

$pares = 0;

for ($i = 0; $i < 5; $i++) {
    $valor = intval(fgets(STDIN));
    $valores[] = $valor;

    if (par($valor)) {
        $pares++;
    }
}

echo $pares . " valores pares\n";

?>