<?php

function converterParaMaiusculas(string $texto): string
{
    return mb_strtoupper($texto, "UTF-8");
}

$frases = ["engenharia de software", "linguagem php", "programação é ótima"];

foreach ($frases as $frase) {
    echo "Original: $frase" . PHP_EOL;
    echo "Maiúsculas: " . converterParaMaiusculas($frase) . PHP_EOL . PHP_EOL;
}

echo "Comparação com strtoupper(): " . strtoupper("programação é ótima") . PHP_EOL;
