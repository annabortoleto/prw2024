<?php

$numPares = 0;
$numImpares = 0;
$numPositivos = 0;
$numNegativos = 0;

for ($i = 0; $i < 5; $i++) {
    $num = intval(fgets(STDIN));
    
    if ($num % 2 == 0) {
        $numPares++;
    } else {
        $numImpares++;
    }
    
    if ($num > 0) {
        $numPositivos++;
    } elseif ($num < 0) {
        $numNegativos++;
    }
}

echo "$numPares valor(es) par(es)" . "\n";
echo "$numImpares valor(es) impar(es)" . "\n";
echo "$numPositivos valor(es) positivo(s)" . "\n";
echo "$numNegativos valor(es) negativo(s)" . "\n";
?>
