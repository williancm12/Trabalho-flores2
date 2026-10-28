<?php

function gerarArrayPares(int $n): array
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

$testes = [10, 15, 0, -4];

foreach ($testes as $n) {
    echo "Pares de 0 até $n: [" . implode(", ", gerarArrayPares($n)) . "]" . PHP_EOL;
}
