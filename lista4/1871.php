<?php

function semZeros($a, $b) {
 
    $soma = $a + $b;
    
    $semZeros = str_replace("0", "", strval($soma));

    return $semZeros;
}

while (true) {
    list($m, $n) = explode(" ", trim(fgets(STDIN)));

    if ($m == 0 && $n == 0) {
        break;
    }

    $resultado = semZeros($m, $n);

    echo $resultado . "\n";
}

?>