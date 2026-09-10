<?php
/*Crie uma matriz 3x3 representando um mapa de assentos, usando `L` para assento livre e `O` para assento ocupado. Exiba o valor de uma posição específica da matriz.*/

$mapaAssentos = [
    ["l","o","l"],
    ["o","o","l"],
    ["l","l","o"]
];

echo "O primeiro assento da fileira {$mapaAssentos[0][0]} está livre";

?>