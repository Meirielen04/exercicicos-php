<?php
// Números Pares e Ímpares (for): Faça um loop de 1 a 100 que imprima apenas os números pares e, ao final, 
// informe quantos números pares foram exibidos.

$total = 0;

for($par = 0; $par <= 100; $par = $par +2) {
   $total++;
}

echo "Foram passados " . $total . " números pares";
?>