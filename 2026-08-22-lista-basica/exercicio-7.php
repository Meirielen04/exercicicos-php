<?php
// <!-- Reajuste Salarial por Produtividade (Aritmético): Crie um script que receba o salário base de um funcionário 
//  e a porcentagem de bônus por metas atingidas. Calcule o valor correspondente ao aumento percentual, some-o ao 
//  salário base e exiba o novo salário final com o reajuste aplicado. -->

$salarioBase = 3000;
$bonusPorcent = 0.2;
$precoBonus = $salarioBase * $bonusPorcent;

echo "Salário base + bonus será de: " . $salarioBase + $precoBonus;

?>