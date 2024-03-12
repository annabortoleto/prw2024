<?php

$notasAluno = readline("Escreva as notas do aluno (separadas por espaço): ");
$notas = explode(" ", $notasAluno);

$nota1 = floatval($notas[0]);
$nota2 = floatval($notas[1]);
$nota3 = floatval($notas[2]);
$nota4 = floatval($notas[3]);

$mediaAluno = ($nota1 * 2 + $nota2 * 3 + $nota3 * 4 + $nota4 * 1) / 10;

echo "Media: " . number_format($mediaAluno, 1, '.', '') . "\n";

if ($mediaAluno >= 7.0) {
    echo "Aluno aprovado.\n";
} elseif ($mediaAluno >= 5.0) {
    echo "Aluno reprovado.\n";
} else {
    echo "Aluno de exame.\n";
    
    $exame = floatval(readline("Escreva a nota do exame: "));
    $mediaFinal = ($mediaAluno + $exame) / 2;
    
    if ($mediaFinal >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    echo "Media final: " . number_format($mediaFinal, 1, '.', '') . "\n";
}
?>
