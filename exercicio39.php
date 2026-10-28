<?php

function contagemRegressiva(int $inicio): void
{
    if ($inicio < 0) {
        echo "Informe um número maior ou igual a 0." . PHP_EOL;
        return;
    }

    for ($i = $inicio; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }

    echo "Fim da contagem!" . PHP_EOL;
}

contagemRegressiva(10);
echo PHP_EOL;
contagemRegressiva(-5);
