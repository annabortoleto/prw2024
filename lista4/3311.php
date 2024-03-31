<?php

$N = readline();
$nomes = [];

for ($i = 0; $i < $N; $i++) {
    $nomes[] = readline();
}

function comparar($a, $b) {
    return strcmp($a[0], $b[0]);
}

usort($nomes, 'comparar');

foreach ($nomes as $nome) {
    echo $nome . "\n";
}
?>
