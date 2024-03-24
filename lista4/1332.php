<?php

function reconhecimento($palavra) {
    $numeros = array("one", "two", "three");
    
    foreach ($numeros as $numero) {
        if (levenshtein($palavra, $numero) <= 1) {
            return array_search($numero, $numeros) + 1;
        }
    }
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $palavra = trim(fgets(STDIN));
    echo reconhecimento($palavra) . "\n";
}

?>