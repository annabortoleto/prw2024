<?php
$matriz = [];
for ($i = 0; $i < 4; $i++) {
    $matriz[] = readline();
}

$valores = [];
for ($i = 0; $i < strlen($matriz[0]); $i++) {
    $f = intval($matriz[0][$i]) * 1000;
    $f += intval($matriz[1][$i]) * 100;
    $f += intval($matriz[2][$i]) * 10;
    $f += intval($matriz[3][$i]);
    $valores[] = $f;
}

for ($i = 1; $i < count($valores) - 1; $i++) {
    echo chr(($valores[0] * $valores[$i] + $valores[count($valores) - 1]) % 257);
}
echo "\n";
?>