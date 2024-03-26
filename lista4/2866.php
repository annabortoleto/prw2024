<?php

$cript = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $cript; $i++) {
    $mensagem = trim(fgets(STDIN));
    $oculto = preg_replace("/[^a-z]/","",$mensagem);
    $oculto = strrev($oculto);
    echo $oculto . "\n";
}
?>