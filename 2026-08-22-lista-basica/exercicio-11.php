<?php
// Desconto por Perfil de Cliente (match): Crie um script onde uma variável armazena o tipo de cliente (Bronze, Prata, Ouro, VIP) 
// e o valor de uma compra. O match deve retornar a porcentagem de desconto a ser aplicada no total. 

$valorCompra = 1000;
$clienteTier = "vip";

$desconto = match ($clienteTier) {
    "vip" => 0.6,
    "ouro" => 0.4,
    "prata" => 0.3,
    "bronze" => 0.2,
    "default" => 0,
};

echo $valorCompra - ($valorCompra * $desconto);

?>