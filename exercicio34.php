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
Descritivo: Criar o procedimento verificar para informar se um número é par ou ímpar.
******************************************************************************/

/*
Explicação:
O procedimento verificar recebe um número e usa o resto da divisão por 2 para descobrir se ele é par ou ímpar.
*/

function verificar($numero) {
    if ($numero % 2 === 0) {
        echo "Par";
    } else {
        echo "Ímpar";
    }
}

verificar(2222222222222);