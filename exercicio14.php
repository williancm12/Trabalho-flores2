<?php

$numero = 0;

do {
    echo "Digite um número (negativo para sair): ";
    $entrada = trim(fgets(STDIN));

    if (is_numeric($entrada)) {
        $numero = $entrada + 0;
        echo "Número lido: $numero" . PHP_EOL;
    } else {
        echo "Entrada inválida! Digite um número." . PHP_EOL;
    }
} while ($numero >= 0);

echo "Número negativo digitado. Programa encerrado." . PHP_EOL;
