<?php
$N = 5;
$entrada = [];
for ($i = 0; $i < $N; $i++) {
    $entrada[] = str_split(trim(fgets(STDIN)));
}

foreach ($entrada as $linha) {
    foreach ($linha as $coluna) {
        echo $coluna;
    }
    echo. "\n";
}
?>