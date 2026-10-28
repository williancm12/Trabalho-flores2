<?php

$notas = [
    "Linguagem e Técnicas de Programação" => 8.5,
    "Cálculo"                             => 7.0,
    "Banco de Dados"                      => 9.0,
    "Engenharia de Requisitos"            => 6.5,
];

$soma = 0;

echo "Boletim do aluno:" . PHP_EOL;

foreach ($notas as $disciplina => $nota) {
    echo "- $disciplina: " . number_format($nota, 1, ",", ".") . PHP_EOL;
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;
echo "Situação: " . ($media >= 7 ? "Aprovado" : "Reprovado") . PHP_EOL;
