<?php

function mostrarDados(string $nome, int $idade, string $cidade): void
{
    echo "========== FICHA ==========" . PHP_EOL;
    echo "Nome   : $nome" . PHP_EOL;
    echo "Idade  : $idade anos" . PHP_EOL;
    echo "Cidade : $cidade" . PHP_EOL;
    echo "===========================" . PHP_EOL;
}

mostrarDados("Carlos Henrique", 21, "Maringá");
echo PHP_EOL;
mostrarDados("Beatriz Lima", 19, "Sarandi");
