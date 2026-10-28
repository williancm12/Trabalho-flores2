<?php

echo "Digite um número inteiro: ";
$numero = filter_var(trim(fgets(STDIN)), FILTER_VALIDATE_INT);

while ($numero === false) {
    echo "Valor inválido! Digite um número inteiro: ";
    $numero = filter_var(trim(fgets(STDIN)), FILTER_VALIDATE_INT);
}

$restante = abs($numero);
$digitos = 0;

if ($restante === 0) {
    $digitos = 1;
}

while ($restante > 0) {
    $restante = intdiv($restante, 10);
    $digitos++;
}

echo "O número $numero possui $digitos dígito(s)." . PHP_EOL;
