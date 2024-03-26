<?php
function correcao($texto) {
    $palavras = explode(" ", $texto);
    $resultado = array();
    foreach ($palavras as $palavra) {
        $novaPalavra = $palavra[0]; 
        $ultimaSilaba = '';
        $primeiraSilaba = true;
        for ($i = 1; $i < strlen($palavra); $i++) {
            if ($i < strlen($palavra) - 1 && $palavra[$i] == $palavra[$i+1] && strlen($palavra[$i]) == 1) { 
                $ultimaSilaba = $palavra[$i];
                if ($primeiraSilaba || $palavra[$i] != $palavra[$i-1]) {
                    $novaPalavra .= $palavra[$i];
                }
            } elseif (strlen($palavra[$i]) == 1) {
                $novaPalavra .= $palavra[$i]; 
                $primeiraSilaba = false;
                $ultimaSilaba = '';
            } elseif (strlen($palavra[$i]) == 2 && $palavra[$i] != $ultimaSilaba) {
                $novaPalavra .= $palavra[$i]; 
                $primeiraSilaba = false;
                $ultimaSilaba = '';
            }
        }
        $resultado[] = $novaPalavra;
    }
    return implode(" ", $resultado);
}

$texto = readline();
$resultado = correcao($texto);
echo $resultado;
?>