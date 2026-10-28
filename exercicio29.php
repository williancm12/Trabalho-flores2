<?php

$numeros = [12, 5, 23, 18, 9, 45];
$limite = 20;

echo "Array: " . implode(", ", $numeros) . PHP_EOL;
echo "Números maiores que $limite:" . PHP_EOL;

foreach ($numeros as $numero) {
    if ($numero > $limite) {
        echo $numero . PHP_EOL;
    }
}
