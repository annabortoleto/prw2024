<?php

list($x, $y, $z) = array_map('floatval', explode(' ', readline()));

if ($x < $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}
if ($x < $z) {
    $temp = $x;
    $x = $z;
    $z = $temp;
}
if ($y < $z) {
    $temp = $y;
    $y = $z;
    $z = $temp;
}

if ($x >= $y + $z) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if ($x * $x == $y * $y + $z * $z) {
        echo "TRIANGULO RETANGULO\n";
    }
    if ($x * $x > $y * $y + $z * $z) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if ($x * $x < $y * $y + $z * $z) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($x == $y && $y == $z) {
        echo "TRIANGULO EQUILATERO\n";
    }
    if (($x == $y && $y != $z) || ($x == $z && $z != $y) || ($y == $z && $z != $x)) {
        echo "TRIANGULO ISOSCELES\n";
    }

?>