<?php
$numeroHo = intval(readline());
$ho = "";
for ($i = 0; $i < $numeroHo; $i++) {
    $ho .= "Ho";
    if ($i < $numeroHo - 1) {
        $ho .= " ";
    }
}
echo $ho . "!\n";
?>