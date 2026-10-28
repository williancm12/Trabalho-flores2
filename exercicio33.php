<?php

function mostrarTabuada(int $numero): void
{
    echo "Tabuada do $numero:" . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        printf("%d x %2d = %3d" . PHP_EOL, $numero, $i, $numero * $i);
    }
}

mostrarTabuada(7);
echo PHP_EOL;
mostrarTabuada(9);
