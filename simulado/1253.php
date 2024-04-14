<?php
function decifrar($textoCodificado, $deslocamento) {
    $textoDecifrado = "";
    foreach (str_split($textoCodificado) as $letra) {
        $posicao = ord($letra) - $deslocamento;
        if ($posicao < 65) {
            $posicao += 26;
        }
        $textoDecifrado .= chr($posicao);
    }
    return $textoDecifrado;
}
?>