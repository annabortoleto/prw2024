<?php
$positivos = 0;

for ($i = 0; $i < 6; $i++) {
    $valor = floatval(readline());
    if ($valor > 0) {
        $positivos++;
    }
}

echo "$positivos valores positivos\n";
?>