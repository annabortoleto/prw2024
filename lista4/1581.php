<?php

$N = intval(fgets(STDIN));

while ($N > 0) {
    $k = intval(fgets(STDIN)); 
    $idiomas = [];

    for ($i = 0; $i < $k; $i++) {
        $idioma = trim(fgets(STDIN));
        $idiomas[] = $idioma;
    }

    $contagemIdiomas = array_count_values($idiomas);

    $idiomaApropriado = array_search(max($contagemIdiomas), $contagemIdiomas);

    echo $idiomaApropriado . "\n";

    $N--;
}
?>