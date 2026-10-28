<?php

$produtos = [
    ["nome" => "Notebook", "preco" => 3499.90],
    ["nome" => "Mouse sem fio", "preco" => 89.90],
    ["nome" => "Teclado mecânico", "preco" => 259.00],
    ["nome" => "Monitor 24 polegadas", "preco" => 899.99],
];

echo "Array de produtos criado com " . count($produtos) . " itens:" . PHP_EOL;
print_r($produtos);

echo "Exemplo de acesso: o primeiro produto é \"" . $produtos[0]["nome"] . "\"." . PHP_EOL;
