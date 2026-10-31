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
Descritivo: Imprimir os números pares de 2 a 20 usando for.
******************************************************************************/

/*
Explicação:
O for começa no número 2 e adiciona 2 a cada repetição até chegar a 20, sendo assim cada valor impresso é um número par.
*/

for ($numero = 2; $numero <= 20; $numero += 2) {
    echo $numero . "  ";
}