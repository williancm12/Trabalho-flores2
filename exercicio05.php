<?php

$limite = 100;
$soma = 0;

for ($i = 1; $i <= $limite; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a $limite é: $soma" . PHP_EOL;

$somaGauss = $limite * ($limite + 1) / 2;
echo "Conferência pela fórmula de Gauss: $somaGauss" . PHP_EOL;
