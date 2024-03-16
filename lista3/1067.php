<?php

$X = intval(fgets(STDIN));

for ($i = 1; $i <= $X; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
?>
