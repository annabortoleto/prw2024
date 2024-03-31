<?php
function obterSequenciaTeclas($mensagem) {
    $sequencia = '';
    $teclaAnterior = '';
    $teclaAtual = '';
    
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];
        
        if (ctype_upper($caractere)) {
            $teclaAtual = '#';
            $caractere = strtolower($caractere);
        } else {
            $teclaAtual = obterTecla($caractere);
        }
        
        if ($teclaAtual == $teclaAnterior) {
            $sequencia .= '*';
        } elseif ($teclaAtual != '#') { 
            if ($teclaAtual == substr($sequencia, -1, 1)) {
                $sequencia .= '*';
            }
        }
        
        $sequencia .= $teclaAtual;
        $teclaAnterior = $teclaAtual;
    }
    
    return $sequencia;
}

function obterTecla($caractere) {
    $teclas = [
        'a' => '2',
        'b' => '22',
        'c' => '222',
        'd' => '3',
        'e' => '33',
        'f' => '333',
        'g' => '4',
        'h' => '44',
        'i' => '444',
        'j' => '5',
        'k' => '55',
        'l' => '555',
        'm' => '6',
        'n' => '66',
        'o' => '666',
        'p' => '7',
        'q' => '77',
        'r' => '777',
        's' => '7777',
        't' => '8',
        'u' => '88',
        'v' => '888',
        'w' => '9',
        'x' => '99',
        'y' => '999',
        'z' => '9999',
        ' ' => '0'
    ];
    
    return $teclas[$caractere];
}

$quantidadeMensagens = intval(fgets(STDIN));

for ($i = 0; $i < $quantidadeMensagens; $i++) {
    $mensagem = trim(fgets(STDIN));
    $sequenciaTeclas = obterSequenciaTeclas($mensagem);
    echo $sequenciaTeclas . "\n";
}
?>