<?php

$dias = [
    "Domingo",
    "Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado",
];
$totalDias = count($dias);

echo "Dias da semana:" . PHP_EOL;

for ($i = 0; $i < $totalDias; $i++) {
    echo ($i + 1) . " - " . $dias[$i] . PHP_EOL;
}
