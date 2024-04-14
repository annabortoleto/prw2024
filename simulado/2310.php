<?php
$n = intval(trim(fgets(STDIN)));
$nome = trim(fgets(STDIN));
$tentativas = ['S' => 0, 'B' => 0, 'A' => 0];
$totalSucessos = ['S' => 0, 'B' => 0, 'A' => 0];

while ($N--) {
    array_push($jogador, readline());
    $totalTentativas['S'] += $tentativas[0];
    $totalTentativas['B'] += $tentativas[1];
    $totalTentativas['A'] += $tentativas[2];

    $totalSucessos['S'] += $sucessos[0];
    $totalSucessos['B'] += $sucessos[1];
    $totalSucessos['A'] += $sucessos[2];
}

$percSaque = ($totalSucessos['S'] / $totalTentativas['S']) * 100;
$percentualBloqueio = ($totalSucessos['B'] / $total_tentativas['B']) * 100;
$percentualAtaque = ($totalSucessos['A'] / $totalTentativas['A']) * 100;

echo "Pontos de Saque: " . number_format($percSaque, 2) . "%.\n";
echo "Pontos de Bloqueio: " . number_format($percBloqueio, 2) . "%.\n";
echo "Pontos de Ataque: " . number_format($percAtaque, 2) . "%.\n";
?>