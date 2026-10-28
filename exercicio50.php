<?php

function inverterString(string $texto): string
{
    $invertida = "";
    $tamanho = mb_strlen($texto, "UTF-8");

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= mb_substr($texto, $i, 1, "UTF-8");
    }

    return $invertida;
}

$textos = ["PHP", "Engenharia de Software", "Programação", "Arara"];

foreach ($textos as $texto) {
    $invertido = inverterString($texto);
    echo "Original: $texto | Invertido: $invertido";

    if (mb_strtolower($texto, "UTF-8") === mb_strtolower($invertido, "UTF-8")) {
        echo " (é um palíndromo!)";
    }

    echo PHP_EOL;
}
