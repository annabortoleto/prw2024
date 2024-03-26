<?php

function resolver($p1, $p2, $incompleta) {
    $posicoes = array();
    
    for ($i = 0; $i < strlen($p1); $i++) {
        if ($p1[$i] != $p2[$i]) {
            $posicoes[] = $i;
        }
    }
    
    foreach ($posicoes as $posicao) {
        if ($p1[$posicao] == $incompleta[$posicao] && $p2[$posicao] != $incompleta[$posicao]) {
            return "Y"; 
        } elseif ($p2[$posicao] == $incompleta[$posicao] && $p1[$posicao] != $incompleta[$posicao]) {
            return "Y"; 
        }
    }
    
    foreach ($posicoes as $posicao) {
        if ($incompleta[$posicao] != $p1[$posicao] && $incompleta[$posicao] != $p2[$posicao]) {
            return "N"; 
        }
    }
    
    return "Y"; 
}

function principal() {
    $teste = intval(fgets(STDIN));
    
    for ($i = 0; $i < $teste; $i++) {
        $palavras = explode(" ", fgets(STDIN));
        $p1 = trim($palavras[0]);
        $p2 = trim($palavras[1]);
        $incompleta = trim($palavras[2]);
        
        echo resolver($p1, $p2, $incompleta) . "\n";
    }
}

principal(); 
?>