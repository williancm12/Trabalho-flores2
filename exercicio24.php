<?php

$produtos = [
    ["nome" => "Notebook", "preco" => 3499.90],
    ["nome" => "Mouse sem fio", "preco" => 89.90],
    ["nome" => "Teclado mecânico", "preco" => 259.00],
    ["nome" => "Monitor 24 polegadas", "preco" => 899.99],
];

$rotulos = ["nome" => "Nome", "preco" => "Preço"];
$total = 0;

foreach ($produtos as $indice => $produto) {
    echo "Produto " . ($indice + 1) . PHP_EOL;

    foreach ($produto as $campo => $valor) {
        if ($campo === "preco") {
            $total += $valor;
            $valor = 'R$ ' . number_format($valor, 2, ",", ".");
        }

        echo "  " . $rotulos[$campo] . ": " . $valor . PHP_EOL;
    }
}

echo "Valor total dos produtos: " . 'R$ ' . number_format($total, 2, ",", ".") . PHP_EOL;
