<?
// Desconto por Perfil de Cliente (match): Crie um script onde uma variável armazena o tipo de cliente (Bronze, Prata, Ouro, VIP) 
// e o valor de uma compra. O match deve retornar a porcentagem de desconto a ser aplicada no total. 

$valorCompra = "VIP = 10.000";

$clienteTier = match ($valorCompra) {
    "VIP = 10.000" => 0.6,
    "Ouro = 7.000" => 0.4,
    "Prata = 3.500" => 0.3,
    "Bronze = 1.500" => 0.2,
    "Default" => 0,
};

echo $clienteTier;

?>