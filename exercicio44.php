<?php

function calcularAreaRetangulo(float $largura, float $altura): float
{
    return $largura * $altura;
}

$retangulos = [
    ["largura" => 5, "altura" => 3],
    ["largura" => 2.5, "altura" => 4],
    ["largura" => 10, "altura" => 7.5],
];

foreach ($retangulos as $retangulo) {
    $area = calcularAreaRetangulo($retangulo["largura"], $retangulo["altura"]);

    echo "Largura: " . $retangulo["largura"] . " m | Altura: " . $retangulo["altura"]
        . " m | Área: " . number_format($area, 2, ",", ".") . " m²" . PHP_EOL;
}
