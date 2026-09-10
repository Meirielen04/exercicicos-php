<?php
/*Crie um array associativo com códigos e nomes de três disciplinas. Use `foreach` para exibir somente os nomes das disciplinas.*/

$curso =[
    "001" => "Tecnicas de Programação",
    "002" => "Desenvolvimento Web",
    "003" => "Interação Humano Computador"
];

foreach ($curso as $cod => $disciplinas) {
    echo "{$disciplinas} faz parte do curso de Desenvolvimento de Software Multiplataforma" . "\n";
}

?>