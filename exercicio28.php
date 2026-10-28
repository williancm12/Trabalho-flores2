<?php

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Manga"];
$frutasProcuradas = ["Maçã", "Abacaxi"];

echo "Frutas: " . implode(", ", $frutas) . PHP_EOL;

foreach ($frutasProcuradas as $fruta) {
    if (in_array($fruta, $frutas, true)) {
        $posicao = array_search($fruta, $frutas, true);
        echo "A fruta \"$fruta\" existe no array (índice $posicao)." . PHP_EOL;
    } else {
        echo "A fruta \"$fruta\" NÃO existe no array." . PHP_EOL;
    }
}
