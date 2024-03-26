<?php
function numeroMalaSorte($N) {
    $tamanho = strlen($N);
    for ($i = 0; $i < $tamanho - 1; $i++) {
        if ($N[$i] == '1' && $N[$i + 1] == '3') {
            return true;
        }
    }
    return false;
}

$entrada = intval(trim(fgets(STDIN)));

if (numeroMalaSorte(strval($entrada))) {
    echo "$entrada es de Mala Suerte\n";
} else {
    echo "$entrada NO es de Mala Suerte\n";
}
?>