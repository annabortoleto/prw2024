<?php

function vencedor($jogadaRajesh, $jogadaSheldon) {
    if ($jogadaRajesh === $jogadaSheldon) {
        return "empate";
    }
    
    $regras = array(
        "tesoura" => array("papel", "lagarto"),
        "papel" => array("pedra", "spock"),
        "pedra" => array("lagarto", "tesoura"),
        "lagarto" => array("spock", "papel"),
        "spock" => array("tesoura", "pedra")
    );

    if (in_array($jogadaSheldon, $regras[$jogadaRajesh])) {
        return "rajesh";
    } elseif (in_array($jogadaRajesh, $regras[$jogadaSheldon])) {
        return "sheldon";
    } else {
        return "empate";
    }
}

$teste = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $teste; $i++) {
    list($jogadaRajesh, $jogadaSheldon) = explode(" ", trim(fgets(STDIN)));
    
    echo vencedor(strtolower($jogadaRajesh), strtolower($jogadaSheldon)) . "\n";
}

?>
