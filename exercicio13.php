<?php

$senhaCorreta = "1234";
$tentativas = 0;

do {
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));
    $tentativas++;

    if ($senha !== $senhaCorreta) {
        echo "Senha incorreta! Tente novamente." . PHP_EOL;
    }
} while ($senha !== $senhaCorreta);

echo "Acesso liberado! Senha correta digitada na tentativa nº $tentativas." . PHP_EOL;
