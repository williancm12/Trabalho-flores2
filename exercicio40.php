<?php

function mostrarCarro(array $carro): void
{
    echo "Marca : " . ($carro["marca"] ?? "Não informado") . PHP_EOL;
    echo "Modelo: " . ($carro["modelo"] ?? "Não informado") . PHP_EOL;
    echo "Ano   : " . ($carro["ano"] ?? "Não informado") . PHP_EOL;
}

$carro1 = ["marca" => "Volkswagen", "modelo" => "Gol", "ano" => 2020];
$carro2 = ["marca" => "Fiat", "modelo" => "Argo", "ano" => 2023];
$carro3 = ["marca" => "Chevrolet", "modelo" => "Onix"];

mostrarCarro($carro1);
echo PHP_EOL;
mostrarCarro($carro2);
echo PHP_EOL;
mostrarCarro($carro3);
