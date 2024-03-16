<?php

$golsInter = 0;
$golsGremio = 0;
$vitInter = 0;
$vitGremio = 0;
$empates = 0;
$total = 0;

do {

    list($golsInterPartida, $golsGremioPartida) = explode(" ", fgets(STDIN));

    $golsInter += $golsInterPartida;
    $golsGremio += $golsGremioPartida;
    
    if ($golsInterPartida > $golsGremioPartida) {
        $vitInter++;
    } elseif ($golsGremioPartida > $golsInterPartida) {
        $vitGremio++;
    } else {
        $empates++;
    }
    
    $total++;

    echo "Novo grenal (1-sim 2-nao)\n";
    $resposta = intval(fgets(STDIN));
} while ($resposta == 1);

echo "$total grenais\n";
echo "Inter:$vitInter\n";
echo "Gremio:$vitGremio\n";
echo "Empates:$empates\n";

if ($vitInter > $vitGremio) {
    echo "Inter venceu mais\n";
} elseif ($vitGremio > $vitInter) {
    echo "Gremio venceu mais\n";
} else {
    echo "Nao houve vencedor\n";
}
?>