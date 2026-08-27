<?php
// 1.	Calculadora Básica (switch): Crie um script que receba dois números e um operador (+, -, *, /). 
// Utilize a estrutura switch para realizar a operação matemática correspondente e exibir o resultado

$n1 = 5;
$n2 = 7;

$operador = "-";

switch($operador) {
    case "+":
        echo "Resultado: " . ($n1 + $n2) . "\n";
        break;
    case "-":
        echo "Resultado: " . ($n1 - $n2) . "\n";
        break;
    case "*":
        echo "Resultado: " . ($n1 * $n2) . "\n";
        break;
    case "/":
        echo "Resultado: " . ($n1 / $n2) . "\n";
        break;
    default:
        echo "Escolha um operador válido +, -, /, *";
}

?>