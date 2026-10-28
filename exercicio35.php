<?php

function imprimirArray(array $elementos): void
{
    if (count($elementos) === 0) {
        echo "O array está vazio." . PHP_EOL;
        return;
    }

    foreach ($elementos as $indice => $elemento) {
        echo "[$indice] => $elemento" . PHP_EOL;
    }
}

echo "Linguagens:" . PHP_EOL;
imprimirArray(["PHP", "JavaScript", "Python", "Java"]);

echo PHP_EOL . "Números:" . PHP_EOL;
imprimirArray([10, 20, 30]);

echo PHP_EOL . "Array vazio:" . PHP_EOL;
imprimirArray([]);
