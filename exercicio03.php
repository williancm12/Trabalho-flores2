<?php

$numero = 5;

echo "Tabuada do $numero:" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    printf("%d x %2d = %2d" . PHP_EOL, $numero, $i, $resultado);
}
