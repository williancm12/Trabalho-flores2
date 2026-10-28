<?php

$sistemaAtivo = false;

do {
    echo PHP_EOL . "========= MENU =========" . PHP_EOL;
    echo "1. Iniciar" . PHP_EOL;
    echo "2. Parar" . PHP_EOL;
    echo "3. Sair" . PHP_EOL;
    echo "========================" . PHP_EOL;
    echo "Escolha uma opção: ";

    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case "1":
            if ($sistemaAtivo) {
                echo "O sistema já está em execução." . PHP_EOL;
            } else {
                $sistemaAtivo = true;
                echo "Sistema iniciado com sucesso!" . PHP_EOL;
            }
            break;

        case "2":
            if ($sistemaAtivo) {
                $sistemaAtivo = false;
                echo "Sistema parado." . PHP_EOL;
            } else {
                echo "O sistema não está em execução." . PHP_EOL;
            }
            break;

        case "3":
            echo "Saindo do programa... Até logo!" . PHP_EOL;
            break;

        default:
            echo "Opção inválida! Escolha 1, 2 ou 3." . PHP_EOL;
    }
} while ($opcao !== "3");
