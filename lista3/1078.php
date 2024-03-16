<?php

$N = intval(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $N;
    
    echo "$i x $N = $resultado\n";
}
?>