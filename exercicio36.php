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
Descritivo: Criar o procedimento desenharLinha que imprime uma linha com 20 hífens.
******************************************************************************/

/*
Explicação:
O procedimento desenharLinha usa str_repeat para repetir o hífen 20 vezes e imprimir a linha na tela.
*/

function desenharLinha() {
    echo str_repeat("-", 20) . PHP_EOL;
}

desenharLinha();
