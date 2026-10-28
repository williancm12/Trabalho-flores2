<?php

function fatorial(int $numero): ?int
{
    if ($numero < 0) {
        return null;
    }

    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

$testes = [0, 1, 5, 10, -3];

foreach ($testes as $numero) {
    $resultado = fatorial($numero);

    if ($resultado === null) {
        echo "Não existe fatorial de número negativo ($numero)." . PHP_EOL;
    } else {
        echo "$numero! = $resultado" . PHP_EOL;
    }
}
