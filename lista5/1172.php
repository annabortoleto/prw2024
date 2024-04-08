<?php
$X = array();

for ($i = 0; $i < 10; $i++) {
    $X[$i] = intval(fgets(STDIN));
}

for ($i = 0; $i < 10; $i++) {
    if ($X[$i] <= 0) {
        $X[$i] = 1;
    }
}

for ($i = 0; $i < 10; $i++) {
    echo "X[$i] = " . $X[$i] . PHP_EOL;
}
?>