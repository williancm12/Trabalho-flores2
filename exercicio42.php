<?php

function maiorNumero(float $a, float $b): float
{
    if ($a >= $b) {
        return $a;
    }

    return $b;
}

echo "O maior entre 10 e 25 é: " . maiorNumero(10, 25) . PHP_EOL;
echo "O maior entre -4 e -9 é: " . maiorNumero(-4, -9) . PHP_EOL;
echo "O maior entre 7.5 e 7.5 é: " . maiorNumero(7.5, 7.5) . PHP_EOL;
