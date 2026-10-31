<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2
Componentes:
    26014891-2 - Ana Clara Amantino
    26005411-2 - Edson Robson Meneses Junior
    26015396-2 - João Winicios Lopo Oliveira
    26002469-2 - Júlia Rafaela Akemi Assakura
    226011155-2 - Kauã Teodoro Cardoso
    26006574-2 - Vitor Ferst Wosniak
Data: 03 de Novembro de 2026
Descritivo: Criar um array associativo para armazenar nome, idade e curso de um aluno.
******************************************************************************/

/*
Explicação:
O array associativo aluno guarda três informações usando chaves: nome, idade e curso. Depois, o programa mostra cada informação armazenada.
*/

$aluno = [
    "nome" => "João",
    "idade" => 20,
    "curso" => "Engenharia de Software"
];

echo "Dados do aluno:" . PHP_EOL;
echo "Nome: " . $aluno["nome"] . PHP_EOL;
echo "Idade: " . $aluno["idade"] . PHP_EOL;
echo "Curso: " . $aluno["curso"] . PHP_EOL;
