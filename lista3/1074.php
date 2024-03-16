<?php

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $X = intval(fgets(STDIN));
    
    if ($X == 0) {
        echo "NULL" . "\n";
    } else {
        $tipo = ($X % 2 == 0) ? "EVEN" : "ODD";
        $sinal = ($X > 0) ? "POSITIVE" : "NEGATIVE";
        
        echo "$tipo $sinal" . "\n";
    }
}
?>