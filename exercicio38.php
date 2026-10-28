<?php

function calcularMediaAluno(float $nota1, float $nota2): void
{
    $media = ($nota1 + $nota2) / 2;
    $situacao = ($media >= 7) ? "Aprovado" : "Reprovado";

    echo "Notas: " . number_format($nota1, 1, ",", "") . " e " . number_format($nota2, 1, ",", "") . PHP_EOL;
    echo "Média: " . number_format($media, 2, ",", "") . PHP_EOL;
    echo "Situação: $situacao" . PHP_EOL;
}

calcularMediaAluno(8.0, 7.5);
echo PHP_EOL;
calcularMediaAluno(5.5, 6.0);
echo PHP_EOL;
calcularMediaAluno(7.0, 7.0);
