<?php

$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {

    if ($i % 2 == 0) {
        $quadrado = $i * $i;
        echo "$i^2 = $quadrado" . "\n";
    }
}
?>
