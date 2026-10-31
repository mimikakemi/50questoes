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
Descritivo: Imprimir os múltiplos de 3, de 3 a 30, usando while.
******************************************************************************/

/*
Explicação:
O while começa no número 3 e adiciona 3 a cada repetição até chegar a 30.
*/

$numero = 3;

while ($numero <= 30) {
    echo $numero . "  ";
    $numero += 3;
}