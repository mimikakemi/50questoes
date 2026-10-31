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
Descritivo: Exibir a tabuada do 5, de 1 a 10, usando for.
******************************************************************************/

/*
Explicação:
O for percorre os números de 1 a 10 e multiplica cada um por 5, mostrando o resultado de cada operação.
*/

for ($numero = 1; $numero <= 10; $numero++) {
    echo "5 x " . $numero . " = " . (5 * $numero) . ", ";
}