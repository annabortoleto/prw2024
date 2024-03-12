<?php

$ddd = intval(readline());

if ($ddd == 61) {
    echo "Brasilia\n";
}
if ($ddd == 71) {
    echo "Salvador\n";
}
if ($ddd == 11) {
    echo "Sao Paulo\n";
}
if ($ddd == 21) {
    echo "Rio de Janeiro\n";
}
if ($ddd == 32) {
    echo "Juiz de Fora\n";
}
if ($ddd == 19) {
    echo "Campinas\n";
}
if ($ddd == 27) {
    echo "Vitoria\n";
}
if ($ddd == 31) {
    echo "Belo Horizonte\n";
}
if ($ddd != 61 && $ddd != 71 && $ddd != 11 && $ddd != 21 && $ddd != 32 && $ddd != 19 && $ddd != 27 && $ddd != 31) {
    echo "DDD nao cadastrado\n";
}

?>
