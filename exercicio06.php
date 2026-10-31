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
Descritivo: Imprimir os números de 1 a 10 usando while.
******************************************************************************/

/*
Explicação:
O while imprime o número atual enquanto ele for menor ou igual a 10, depois de cada impressão, o número adiciona 1.
*/

$numero = 1;

while ($numero <= 10) {
    echo $numero . "  ";
    $numero++;
}