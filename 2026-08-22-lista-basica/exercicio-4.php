<?php 
//Aluguel de Carro Executivo (OR): Crie um script que receba a idade e a renda mensal de um cliente. 
// Utilize a estrutura if/else com o operador lógico || para verificar se o cliente possui idade 
// igual ou superior a 25 anos ou comprovação de renda acima de R$ 7.000,00, exibindo se a locação 
// da categoria luxo foi autorizada. -->

$idadeCliente = 40;
$rendaMensal = 5000;

if ($idadeCliente >= 25 || $rendaMensal > 7000) {
    echo "Parabéns, sua locação de luxo foi autorizada";
} else {
    echo "Idade e renda não possui os requisitos para locação de luxo";
}


?>