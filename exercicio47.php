<?php

function contarVogais(string $texto): int
{
    $vogais = ["a", "e", "i", "o", "u", "á", "à", "â", "ã", "é", "ê", "í", "ó", "ô", "õ", "ú", "ü"];
    $quantidade = 0;

    $caracteres = mb_str_split(mb_strtolower($texto, "UTF-8"), 1, "UTF-8");

    foreach ($caracteres as $caractere) {
        if (in_array($caractere, $vogais, true)) {
            $quantidade++;
        }
    }

    return $quantidade;
}

$textos = ["Engenharia de Software", "Programação", "AEIOU", "PHP"];

foreach ($textos as $texto) {
    echo "\"$texto\" possui " . contarVogais($texto) . " vogal(is)." . PHP_EOL;
}
