<?php

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $RA = trim(fgets(STDIN));

    if (preg_match('/^RA0{0,17}([1-9]\d{0,17})$/', $RA, $combinacoes)) {
        echo $combinacoes[1] . "\n"; 
    } else {
        echo "INVALID DATA\n"; 
    }
}

?>