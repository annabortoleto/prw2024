<?php

$N = intval(fgets(STDIN));

function verificarSobrenome($sobrenome) {
    $letras = preg_match('/[bcdfghjklmnpqrstvwxyz]{3,}/i', $sobrenome);
    
    if ($letras) {
        echo $sobrenome . " nao eh facil\n";
    } else {
        echo $sobrenome . " eh facil\n";
    }
}

for ($i = 0; $i < $N; $i++) {
    $sobrenome = trim(fgets(STDIN)); 
    verificarSobrenome($sobrenome);
}

?>