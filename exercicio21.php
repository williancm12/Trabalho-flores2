<?php

$aluno = [
    "nome"  => "Mariana Oliveira",
    "idade" => 20,
    "curso" => "Engenharia de Software",
];

echo "Array associativo do aluno:" . PHP_EOL;
print_r($aluno);

echo "Acessando os dados pelas chaves:" . PHP_EOL;
echo "Nome: " . $aluno["nome"] . PHP_EOL;
echo "Idade: " . $aluno["idade"] . " anos" . PHP_EOL;
echo "Curso: " . $aluno["curso"] . PHP_EOL;
