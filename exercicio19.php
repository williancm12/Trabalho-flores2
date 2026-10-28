<?php

$numeros = [7, 14, 3, 22, 9, 31, 5, 18, 26, 11];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "Números: " . implode(", ", $numeros) . PHP_EOL;
echo "Soma de todos os números: $soma" . PHP_EOL;
