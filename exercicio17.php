<?php

$numeros = [7, 14, 3, 22, 9, 31, 5, 18, 26, 11];

echo "Array criado com " . count($numeros) . " números inteiros:" . PHP_EOL;
print_r($numeros);

echo "Em uma linha: " . implode(", ", $numeros) . PHP_EOL;
