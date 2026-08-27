<?php
// Classificador de DDD (match): Crie uma variável com um DDD (ex: 11, 16, 19, 21). 
// Usando a expressão match, retorne a região correspondente (ex: 19 → "Campinas/Região", 16 → "Ribeirão Preto/São Carlos/Porto Ferreira", etc.)

$ddd = 19;

$regiao = match($ddd) {
    19 => "Porto Ferreira",
    16 => "Ribeirão preto",
    11 => "São Paulo",
    default => "DDD inválido",
};

echo $regiao

?>