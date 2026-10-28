<?php

function somar(float $a, float $b): float
{
    return $a + $b;
}

$resultado = somar(5, 3);
echo "5 + 3 = $resultado" . PHP_EOL;

echo "2.5 + 4.25 = " . somar(2.5, 4.25) . PHP_EOL;

echo "1 + 2 + 3 (chamadas encadeadas) = " . somar(somar(1, 2), 3) . PHP_EOL;
