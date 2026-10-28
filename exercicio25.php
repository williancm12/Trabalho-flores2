<?php

$numeros = [4, 8, 15, 16, 23, 42];
$quantidade = count($numeros);

echo "Elementos do array: " . implode(", ", $numeros) . PHP_EOL;
echo "O array possui $quantidade elementos." . PHP_EOL;

$numeros[] = 100;

echo "Após adicionar o número 100, o array passou a ter " . count($numeros) . " elementos." . PHP_EOL;
