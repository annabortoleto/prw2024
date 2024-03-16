<?php

$correta = 2002;

while (true) {
    $digitada = intval(fgets(STDIN));

    if ($digitada == $correta) {
        echo "Acesso Permitido\n";
        break; 
    } else {
        echo "Senha Invalida\n";
    }
}
?>