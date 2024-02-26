<?php

$peca1 = explode(" ",fgets(STDIN));
$peca2 = explode(" ",fgets(STDIN));
$valor = number_format($peca1[1] * $peca1[2] + $peca2[1] * $peca2[2],2,".","");

echo "VALOR A PAGAR: R$ ".$valor."\n"

?>