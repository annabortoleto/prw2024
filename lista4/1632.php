<?php

function variacoes($senha) {
    $variacoes = 1;
    $caracteresEspeciais = ['A', 'E', 'I', 'O', 'S'];

    for ($i = 0; $i < strlen($senha); $i++) {
        $caractere = $senha[$i];
        
        if (ctype_alpha($caractere)) {
            $variacoes *= 2; 
        } elseif (in_array(strtoupper($caractere), $caracteresEspeciais)) {
            $variacoes *= 3;
            unset($caracteresEspeciais[array_search(strtoupper($caractere), $caracteresEspeciais)]);
        }
    }

    return $variacoes;
}

$t = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $t; $i++) {
    $senha = trim(fgets(STDIN));
    $variacoes = variacoes($senha);
    echo $variacoes . "\n";
}

?>