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
Descritivo: Criar e exibir um array homogêneo com cinco nomes de cidades.
******************************************************************************/

/*
Explicação:
O array cidades guarda cinco valores do mesmo tipo: nomes de cidades e o foreach percorre o array e mostrando cada cidade.
*/

$cidades = ["Apucarana", "Matinhos", "Curitiba", "São Paulo", "Rio de Janeiro"];

foreach ($cidades as $cidade) {
    echo $cidade . "; ";
}