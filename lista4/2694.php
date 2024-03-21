<?php

function somar($linha) {
    $soma = 0;
    for ($i = 0; $i < strlen($linha); $i++) {
        if (is_numeric($linha[$i])) {
            $num = '';
            while ($i < strlen($linha) && is_numeric($linha[$i])) {
                $num .= $linha[$i];
                $i++;
            }
            $soma += intval($num);
        }
    }
    return $soma;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $linha = trim(fgets(STDIN));

    echo somar($linha) . "\n";
}

?>