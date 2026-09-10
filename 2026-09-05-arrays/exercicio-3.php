<?php
/*Crie um array com quatro temperaturas. Use `for` e `count` para percorrer o array e exibir cada temperatura com a sua posição numerada.*/

$temperatura = [35,3,15,22];

echo count ($temperatura) . "\n";

for ($i = 0; $i < count($temperatura); $i++){
    echo "temperatura: $temperatura[$i]" . "\n";
}
?>