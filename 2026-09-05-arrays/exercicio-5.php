<?php
/*Crie um array associativo com informações de um livro: título, autor, ano e disponibilidade. Exiba o título e o autor do livro usando suas chaves.*/

$livro = [
    "titulo" => "Harry Potter e a Pedra Filosofal",
    "autor" => "J. K. Rowling",
    "ano" => 1997,
    "disponibilidade => true"
];

echo $livro['titulo'] . " é um livro famoso de " . $livro['autor'];

?>