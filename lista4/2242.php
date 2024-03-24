<?php

function risada($risada) {
    $vogais = 'aeiou';
    
    $risadaVogais = preg_replace('/[^aeiou]/', '', $risada);
    
    return $risadaVogais === strrev($risadaVogais);
}

$risada = trim(fgets(STDIN));
if (risada($risada)) {
    echo "S\n";
} else {
    echo "N\n";
}
?>