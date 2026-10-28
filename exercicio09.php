<?php

$soma = 0;
$quantidade = 0;
$continuar = true;

echo "Digite os números que deseja somar (0 para encerrar)." . PHP_EOL;

while ($continuar) {
    echo "Número: ";
    $entrada = trim(fgets(STDIN));

    if (!is_numeric($entrada)) {
        echo "Entrada inválida! Digite apenas números." . PHP_EOL;
        continue;
    }

    $numero = (float) $entrada;

    if ($numero == 0) {
        $continuar = false;
    } else {
        $soma += $numero;
        $quantidade++;
    }
}

echo "Quantidade de números digitados: $quantidade" . PHP_EOL;
echo "Soma de todos os números: $soma" . PHP_EOL;
