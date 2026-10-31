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
Descritivo: Criar o procedimento tabu que imprime a tabuada de um número de 1 a 10.
******************************************************************************/

/*
Explicação:
O procedimento tabu recebe um número e o multiplica pelos valores de 1 a 10, mostrando o resultado de cada operação.
*/

function tabu($numero) {
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        echo $numero . " x " . $multiplicador . " = " . ($numero * $multiplicador) . " ";
    }
}

tabu(9);