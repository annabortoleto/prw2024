<?php
$L = intval(trim(fgets(STDIN)));
$C = intval(trim(fgets(STDIN)));

if (($L + $C) % 2 == 0) {
    echo "1\n";
} else {
    echo "0\n";
}
?>