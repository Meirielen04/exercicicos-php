<?php
/*Crie um array com quatro nomes de alunos. Use `for` e `count` para percorrer o array e exibir uma mensagem de boas-vindas para cada aluno.*/

$nomeAlunos = ["Leandro","Ivo","Renata","Wellington"];

count ($nomeAlunos);

for ($i = 0; $i < count($nomeAlunos); $i++){
    echo "Boas-vindas: $nomeAlunos[$i]" . "\n";
}

?>