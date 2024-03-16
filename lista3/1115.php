<?php

while (true) {

    list($X, $Y) = explode(" ", fgets(STDIN));

    if ($X == 0 || $Y == 0) {
        break;
    }

    if ($X > 0 && $Y > 0) {
        echo "primeiro\n";
    } elseif ($X < 0 && $Y > 0) {
        echo "segundo\n";
    } elseif ($X < 0 && $Y < 0) {
        echo "terceiro\n";
    } elseif ($X > 0 && $Y < 0) {
        echo "quarto\n";
    }
}
?>