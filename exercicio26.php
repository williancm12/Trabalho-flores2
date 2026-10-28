<?php

$numeros = [10, 2, 5, 8, 1];

echo "Array original: " . implode(", ", $numeros) . PHP_EOL;

sort($numeros);

echo "Array ordenado (crescente): " . implode(", ", $numeros) . PHP_EOL;
