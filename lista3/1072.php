<?php

$N = intval(fgets(STDIN));

$in = 0;
$out = 0;

for ($i = 0; $i < $N; $i++) {
    $X = intval(fgets(STDIN));

    if ($X >= 10 && $X <= 20) {
        $in++;
    } else {
        $out++;
    }
}

echo "$in in" . "\n";
echo "$out out" . "\n";
?>