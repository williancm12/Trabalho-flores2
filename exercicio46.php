<?php

function ehPrimo(int $numero): bool
{
    if ($numero < 2) {
        return false;
    }

    for ($divisor = 2; $divisor * $divisor <= $numero; $divisor++) {
        if ($numero % $divisor === 0) {
            return false;
        }
    }

    return true;
}

$testes = [0, 1, 2, 7, 15, 17, 25, 97];

foreach ($testes as $numero) {
    $resultado = ehPrimo($numero);
    $descricao = $resultado ? "é primo" : "não é primo";

    echo "ehPrimo($numero) = " . var_export($resultado, true) . " -> $numero $descricao" . PHP_EOL;
}
