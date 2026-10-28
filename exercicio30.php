<?php

$matriz = [];
$valor = 1;

for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 3; $coluna++) {
        $matriz[$linha][$coluna] = $valor;
        $valor++;
    }
}

echo "Matriz 3x3:" . PHP_EOL;

foreach ($matriz as $linha) {
    foreach ($linha as $elemento) {
        echo str_pad($elemento, 4, " ", STR_PAD_LEFT);
    }
    echo PHP_EOL;
}

echo "Elemento da 2ª linha e 3ª coluna (\$matriz[1][2]): " . $matriz[1][2] . PHP_EOL;
