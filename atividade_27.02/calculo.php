<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$salario = $_POST['salario'];

//INSS
if ($salario <= 1412) {
    $inss = $salario * 0.075;
} else ($salario < 1412.01 && > 2666.68) {
    $inss = $salario * 0.09;
} else ($salario < 2666.69 && > 4000.03) {
    $inss = $salario * 0.12;
} else ($salario < 4000.04 && > 7786.03){
    $inss = $salario * 0.14;
}

//IRPF
if ($idade >= 65){
    $deducao= 2299.42;
} else {
    $deducao = 0;
}

if ($salario < 2259.20 && > 2826.65){
    $irpf = $salario * 0.0075;
} else ($salario < 2826.66 && > 3751.65){
    $irpf = $salario * 0.15;
} else ($salario < 3751.66 && > 4664.68){
    $irpf = $salario * 0.225;
}

echo "<h2>Cálculo:</h2>";

echo "Nome: $nome";
echo "dade: $idade anos";
echo "Salário: R$ $salario";
echo "INSS: R$ $inss";
echo "IRPF: R$ $irpf";

?>