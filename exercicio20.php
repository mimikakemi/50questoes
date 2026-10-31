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
Descritivo: Criar um array com os sete dias da semana e imprimi-los usando for.
******************************************************************************/

/*
Explicação:
O array diasSemana guarda os sete dias da semana. O for percorre as posições do array, começando no índice zero, e imprime cada dia.
*/

$diasSemana = [
    "Domingo",
    "Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado"
];

echo "Dias da semana:" . PHP_EOL;

for ($i = 0; $i < count($diasSemana); $i++) {
    echo $diasSemana[$i] . PHP_EOL;
}
