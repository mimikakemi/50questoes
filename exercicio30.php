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
Descritivo: Montar uma tabela com 3 linhas e 3 colunas e mostrar um número específico dela
******************************************************************************/

/* Como funciona:
 * É como uma tabela: a primeira linha é número 0, a segunda é número 1 e assim por diante.
 * O número que fica na segunda linha e terceira coluna é o número 6.
 */

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Tabela 3x3:\n";
for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 3; $coluna++) {
        echo $matriz[$linha][$coluna] . " ";
    }
    echo "\n";
}

echo "\nO número que está na 2ª linha e 3ª coluna é: " . $matriz[1][2] . "\n";
?>