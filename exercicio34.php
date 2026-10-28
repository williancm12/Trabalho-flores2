<?php

function verificarParImpar(int $numero): void
{
    if ($numero % 2 === 0) {
        echo "$numero é Par" . PHP_EOL;
    } else {
        echo "$numero é Ímpar" . PHP_EOL;
    }
}

$numeros = [4, 7, 0, -3, 10];

foreach ($numeros as $numero) {
    verificarParImpar($numero);
}
