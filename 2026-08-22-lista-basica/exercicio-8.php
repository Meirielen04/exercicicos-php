<?php 
// Conversor de Notas Conceito (match): Crie uma variável com um conceito escolar (A, B, C, D, F) 
// e retorne uma mensagem de feedback formatada utilizando match.

$notaConceito = "B";

$feedback = match ($notaConceito) {
    "A" => "Excelente",
    "B" => "Bom",
    "C" => "Satisfatório",
    "D" => "Ruim",
    "F" => "Reprovado",
    Default => "Coloque uma nota válida (a,b,c,d,f)",
};

echo $feedback
?>