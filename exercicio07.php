<?php

$numeroSecreto = 7;
$palpite = null;
$tentativas = 0;

echo "=== Jogo de Adivinhação ===" . PHP_EOL;
echo "Estou pensando em um número de 1 a 10." . PHP_EOL;

while ($palpite !== $numeroSecreto) {
    echo "Qual é o seu palpite? ";
    $entrada = trim(fgets(STDIN));

    $palpite = filter_var($entrada, FILTER_VALIDATE_INT);

    if ($palpite === false) {
        echo "Digite apenas números inteiros!" . PHP_EOL;
        continue;
    }

    $tentativas++;

    if ($palpite < $numeroSecreto) {
        echo "Errou! O número secreto é MAIOR que $palpite." . PHP_EOL;
    } elseif ($palpite > $numeroSecreto) {
        echo "Errou! O número secreto é MENOR que $palpite." . PHP_EOL;
    }
}

echo "Parabéns, você acertou! O número era $numeroSecreto." . PHP_EOL;
echo "Total de tentativas: $tentativas" . PHP_EOL;
