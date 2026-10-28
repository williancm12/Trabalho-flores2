<?php

function obterPrimeiroElemento(array $elementos): mixed
{
    if (empty($elementos)) {
        return null;
    }

    return $elementos[array_key_first($elementos)];
}

$frutas = ["Maçã", "Banana", "Uva"];
$aluno = ["nome" => "Ana", "idade" => 20];
$numeros = [5, 6, 7];
unset($numeros[0]);

echo "Primeiro elemento de frutas: " . obterPrimeiroElemento($frutas) . PHP_EOL;
echo "Primeiro elemento do array associativo: " . obterPrimeiroElemento($aluno) . PHP_EOL;
echo "Primeiro elemento após remover o índice 0: " . obterPrimeiroElemento($numeros) . PHP_EOL;
echo "Primeiro elemento de um array vazio: " . (obterPrimeiroElemento([]) ?? "null (array vazio)") . PHP_EOL;
