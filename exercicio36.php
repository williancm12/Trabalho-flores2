<?php

function desenharLinha(): void
{
    for ($i = 1; $i <= 20; $i++) {
        echo "-";
    }

    echo PHP_EOL;
}

desenharLinha();
echo "  Trabalho de LTP" . PHP_EOL;
desenharLinha();
