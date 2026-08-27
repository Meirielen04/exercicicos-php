<?php
// <!-- Menu de Comandos com Status (switch): Crie uma simulação de terminal que recebe comandos em texto (start, stop, restart, status) 
// e exiba a ação correspondente no servidor. -->
echo "Escolha uma ação: \n";
echo "\t 1 - Start \n";
echo "\t 2 - Stop \n";
echo "\t 3 - Restart \n";
echo "\t 4 - Status \n";

$escolha = 2;
switch($escolha){
    case 1:
        echo "executando...";
        break;
    case 2:
        echo "Pausado...";
        break; 
    case 3:
        echo "Reiniciando...";
        break;
    case 4:
        echo "Status: disponível";
        break;
    default:
        echo "Selecione uma ação válida";
}

?>