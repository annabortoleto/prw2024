<?php

function compararCodigos($a, $b) {
    return strcmp($a, $b);
}

while ($l = fgets(STDIN)) {
    $n = intval($l);
    $codigos = [];

    for ($i = 0; $i < $n; $i++) {
        $codigo = trim(fgets(STDIN));
        $codigos[] = $codigo;
    }

    usort($codigos, 'compararCodigos');

    foreach ($codigos as $codigo) {
        echo $codigo . "\n";
    }
}

?>