<?php

$limite = 50;
$quantidade = 0;

echo "Números primos entre 1 e $limite:" . PHP_EOL;

for ($numero = 2; $numero <= $limite; $numero++) {
    $ehPrimo = true;

    for ($divisor = 2; $divisor * $divisor <= $numero; $divisor++) {
        if ($numero % $divisor === 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        echo $numero . " ";
        $quantidade++;
    }
}

echo PHP_EOL . "Total: $quantidade números primos." . PHP_EOL;
