<?php
/*Crie um array associativo com códigos e preços de três produtos. Use `foreach` para exibir o código e o preço de cada produto.*/

$produtos =[
    "SKU1001" => 2.50,
    "SKU1002" => 5,
    "SKU1003" => 7.50
];

foreach ($produtos as $cod => $preco) {
    echo "Codigo do produto {$cod} tem o preço de {$preco} \n";
}
?>