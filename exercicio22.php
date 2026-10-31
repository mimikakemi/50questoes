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
Descritivo: Percorrer com foreach os dados do array associativo do exercício 21.
******************************************************************************/

/*
Explicação:
O array associativo aluno contém nome, idade e curso. O foreach passa por cada chave e valor e mostra eles no formato "chave: valor".
*/

$aluno = [
    "nome" => "João",
    "idade" => 20,
    "curso" => "Engenharia de Software"
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . PHP_EOL;
}