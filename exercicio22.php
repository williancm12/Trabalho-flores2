<?php

$aluno = [
    "nome"  => "Mariana Oliveira",
    "idade" => 20,
    "curso" => "Engenharia de Software",
];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
