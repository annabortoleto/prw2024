<?php

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $dieta = str_split(trim(fgets(STDIN)));
    $cafeManha = str_split(trim(fgets(STDIN)));
    $almoco = str_split(trim(fgets(STDIN)));

    sort($cafeManha);
    sort($almoco);

    $consumidos = array_merge($cafeManha, $almoco);

    $jantar = [];
    foreach ($dieta as $alimento) {
        if (!in_array($alimento, $consumidos)) {
            $jantar[] = $alimento;
        }
    }

    if (empty($jantar)) {
        echo "CHEATER\n";
    } else {
        echo implode("", $jantar) . "\n";
    }
}

?>