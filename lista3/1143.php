<?php

$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {
    $quadrado = $i * $i;
    $cubo = $i * $i * $i;
    
    echo "$i $quadrado $cubo\n";
}
?>